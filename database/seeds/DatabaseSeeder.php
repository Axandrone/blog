<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
<<<<<<< HEAD
        $this->call(AuthorSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
=======
>>>>>>> 2ae050481c7297f9a574bec5b33ffa2a32f35a2b
    }
}
