<?php

use App\Model\Package;
use Illuminate\Database\Seeder;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$packages = [
        		'basic'	=> [
        			'name'		=> 'Basic Package',
        			'features'	=> 'Up to 5 pages',
        			'monthly_cost'	=> 3500,
        			'setup_cost'	=> 10000
        		],
        		'business'	=> [
        			'name'		=> 'Business Package',
        			'features'	=> 'Up to 15 pages',
        			'monthly_cost'	=> 5000,
        			'setup_cost'	=> 15000
        		],
        	];

        	foreach ( $packages as $key => $package ) {
        		Package::create([
        			'name'		=> $package['name'],
        			'features'	=> $package['features'],
        			'monthly_cost'	=> $package['monthly_cost'],
        			'setup_cost'	=> $package['setup_cost'],
        		]);
        	}
    }
}
