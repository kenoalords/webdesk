<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PackageTableSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(ReviewDataSeeder::class);
        $this->call(FaqDataSeeder::class);
    }
}
