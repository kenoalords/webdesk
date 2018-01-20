<?php

use App\Model\Faq;
use Illuminate\Database\Seeder;

class FaqDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faqs = [
			[
				'title'	=> 'Are there any setup fees?',
				'description'	=> 'Yes there are setup fees and they differ based on the package you choose.',
				'weight'	=> 3
			],
			[
				'title'	=> 'How long is my contract?',
				'description'	=> 'We typically advise a minimum contract period of 24 months. We wouldn\'t want you to miss a complete redesign of your website and miss out on other great offers.',
				'weight'	=> 4
			],
			[
				'title'	=> 'Do I own the domain you register on my behalf?',
				'description'	=> 'Yes you own the domain and it can be transfered to you for free after 24 months',
				'weight'	=> 5
			],
			[
				'title'	=> 'What if I do not like what you design for me?',
				'description'	=> 'Not to worry, we keep designing your website until we have something you are 100% happy with.',
				'weight'	=> 6
			],
			[
				'title'	=> 'Do I own the website?',
				'description'	=> 'Yes the website is yours, after the 24 month period you are welcome to transfer away however you will not get the level of support we offer and you will not be able to update our website using our content management system, you would need to find a new web designer to setup the site elsewhere.',
				'weight'	=> 2
			],
			[
				'title'	=> 'How long will it take to design my website?',
				'description'	=> 'We usually complete our website projects within one week. We expect that all the required content are provided within the shortest possible time to meet this timeframe',
				'weight'	=> 1
			],
		];

		foreach ( $faqs as $faq ) {
			Faq::create([
				'title' 		=> $faq['title'],
				'description'	=> $faq['description'],
				'weight'		=> $faq['weight'],
			]);
		}
    }
}
