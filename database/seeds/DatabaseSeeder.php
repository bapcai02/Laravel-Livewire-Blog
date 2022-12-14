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
        // $this->call(UsersTableSeeder::class, 50)->create();
        Model::unguard();
        $this->call(UsersTableSeeder::class);
        Model::reguard();
    }
}
