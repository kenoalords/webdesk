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
        			'monthly_cost'	=> 3499,
        			'setup_cost'	=> 9999
        		],
        		'business'	=> [
        			'name'		=> 'Business Package',
        			'features'	=> 'Up to 15 pages',
        			'monthly_cost'	=> 5499,
        			'setup_cost'	=> 14999
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
