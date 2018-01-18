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
        		[
        			'user_id'	=> 1,
        			'review'	=> "I find the developers at Webdesk.ng very professional and committed to delivering quality service to their customers.  Their attention to detail and understanding of what the client needs a refreshing change to my past experience with website developers.  I would definitely recommend Webdesk.ng to my friends.",
        			'name'	=> 'Kolawole Olarewaju',
        			'position'=> 'Founder, Komotion Studios'
        		],
        		[
        			'user_id'	=> 1,
        			'review'	=> "Our experience has been nothing but that of creativity, attention to detail and professionalism. They were able to easily understand and conceptualize our brand and ideas to a simple but unique logo and website. I would definitely recommend the team at webdesk.ng",
        			'name'	=> 'Ajayi O.A',
        			'position'=> 'Managing Partner, Worobo'
        		],
        ];

        foreach ( $reviews as $key => $review ){
            Review::create([
                'user_id'   => $review['user_id'],
                'review'    => $review['review'],
                'name'      => $review['name'],
                'position'  => $review['position'],
            ]);
        }
    }
}
