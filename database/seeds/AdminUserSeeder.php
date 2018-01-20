<?php

use App\Model\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        		'fullname'	=> 'Keno Alordiah',
        		'email'		=> env('ADMIN_EMAIL'),
        		'password'	=> bcrypt(env('ADMIN_PASSWORD')),
        		'username'	=> 'kenoalords',
        		'is_admin'	=> true,
        		'city'		=> 'Ikeja',
        		'state'		=> 'Lagos',
        		'phone_number'	=> '08094366415'
        ]);
    }
}
