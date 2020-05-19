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
        //$this->call(UsersSeeder::class);
        $this->call([
            PhotosSeeder::class,
            RoleSeeder::class,
            UsersSeeder::class,
            ProducteurSeeder::class,
            CommandeSeeder::class,
            
        ]);

            
    }
}
