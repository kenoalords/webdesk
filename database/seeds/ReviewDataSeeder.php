<?php

use App\Model\Review;
use Illuminate\Database\Seeder;

class ReviewDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = [
        		[0]	=> [
        			'user_id'	=> 1,
        			'review'	=> "I find the developers at Webdesk.ng very professional and committed to delivering quality service to their customers.  Their attention to detail and understanding of what the client needs a refreshing change to my past experience with website developers.  I would definitely recommend Webdesk.ng to my friends.",
        			'name'	=> 'Kolawole Olarewaju',
        			'position'=> 'Founder, Komotion Studios'
        		],
        		[1]	=> [
        			'user_id'	=> 1,
        			'review'	=> "I find Webdesk.ng very professional and committed to delivering quality service to their customers.  Their attention to detail and understanding of what the client needs a refreshing change to my past experience with website developers.  I would definitely recommend Webdesk.ng to my friends.",
        			'name'	=> 'Kolawole Olarewaju',
        			'position'=> 'Founder, Komotion Studios'
        		],
        ];
    }
}
