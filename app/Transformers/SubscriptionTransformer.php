<?php

namespace App\Transformers;

use App\Model\Subscription;
use App\Model\Package;
use App\Model\User;
use Carbon\Carbon;
use App\Transformers\PackageTransformer;
use League\Fractal\TransformerAbstract;

class SubscriptionTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */

    protected $defaultIncludes = ['package', 'user'];

    public function transform(Subscription $sub)
    {
        $now = Carbon::now();
        return [
            'id'            => $sub->id,
            'user_id'       => $sub->user_id,
            'domain_name'   => $sub->domain_name,
            'notes'         => $sub->notes,
            'has_domain'    => (bool)$sub->has_domain,
            'include_logo'  => (bool)$sub->include_logo,
            'is_active'     => (bool)$sub->is_active,
            'expires'       => [
                'date'      => $sub->expires->toFormattedDateString(),
                'in_days'   => $now->diffInDays($sub->expires),
            ],
            'renew_interval'=> $sub->renew_interval,
            'created_at'    => $sub->created_at->toFormattedDateString(),
            'progress'      => $sub->progress,
            'progress_description'  => $sub->progress_description
        ];
    }

    public function includePackage(Subscription $sub)
    {
        $package = Package::find($sub->package_id);
        return $this->item($package, new PackageTransformer);
    }

    public function includeUser(Subscription $sub)
    {
        $user = User::find($sub->user_id);
        return $this->item($user, new UserTransformer);
    }
}
