<?php

namespace App\Http\Controllers\Auth;

use Mail;
use App\Model\User;
use App\Model\Package;
use App\Http\Controllers\Controller;
use App\Mail\SubscriptionNotification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $invoice;
    protected function redirectTo()
    {
        return '/invoice/' . $this->invoice . '?is_new=true';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'username' => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:6|confirmed',
            'fullname'  => 'required|string',
            'package'   => 'required|exists:packages,id',
            'phone_number'   => 'required',
            'renew_interval' => 'required|in:1,6,12',
            'city'      => 'required',
            'state'     => 'required',
            'domain'    => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user =  User::create([
            'username' => str_slug($data['email']),
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'fullname' => $data['fullname'],
            'city' => $data['city'],
            'state' => $data['state'],
            'phone_number' => $data['phone_number'],
        ]);
        $subscription = $user->subscription()->create([
            'package_id'    => $data['package'],
            'has_domain'    => (isset($data['has_domain'])) ? $data['has_domain'] : 0,
            'domain_name'   => $data['domain'],
            'renew_interval'=> $data['renew_interval'],
            'notes'         => $data['notes'],
            'include_logo'  => (isset($data['include_logo'])) ? $data['include_logo'] : 0,
            'access_token'  => time().'.'.strtoupper(uniqid(true)).'.'.parse_url($data['domain'], PHP_URL_HOST),
        ]);
        $package = (int) $data['package'];
        $logo_default_cost = (int)config('builder.logo_cost');
        $renew_interval = (int)$data['renew_interval'];
        // dd($logo_default_cost);
        if( $package === 1 || $package === 2 ) {
            $logo_cost = (isset($data['include_logo']) && $data['include_logo'] == "1") ? $logo_default_cost : 0;
            $package_details = Package::find($package);
            $package_cost = $package_details->setup_cost + ( ($renew_interval - 1) * $package_details->monthly_cost );
            $total = $package_cost + $logo_cost;
            $description = $package_details->name . ' @ ₦' . number_format($package_details->setup_cost);

            // Format renew interval
            $interval_description = "";
            switch($renew_interval){
                case 1:
                    $interval_description = 'Monthly renewal';
                    break;
                case 6:
                    $interval_description = "Six months renewal";
                    break;
                case 12:
                    $interval_description = 'Yearly renewal';
                    break;
                default:
                    break;
            }

            $description .= ' (' . $interval_description . ') <br> ';

            if( isset($data['include_logo']) && $data['include_logo']  == "1" ){
                $description .= 'Logo design @ ₦'.config('builder.logo_cost');
            }


            $invoice = $user->invoice()->create([
                'package_id'    => $package_details->id,
                'subscription_id'   => $subscription->id,
                'amount'        => $total,
                'uid'           => uniqid(true),
                'description'   => $description,
            ]);
            Mail::to($user)->bcc(config('app.email'))->send(new SubscriptionNotification($invoice->id));
            $this->invoice = $invoice->id;
        }
        return $user;
    }
}
