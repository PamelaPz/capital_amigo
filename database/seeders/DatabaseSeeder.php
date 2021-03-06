<?php
namespace Database\Seeders;

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
        $this->call([UsersTableSeeder::class]);
        $this->call([AboutTableSeeder::class]);
        $this->call([ProjectsSeeder::class]);
        $this->call([GridProjectsSeeder::class]);
        $this->call([SociosSeeder::class]);
        $this->call([ContactSeeder::class]);
        $this->call([TeamSeeder::class]);
    }
}
