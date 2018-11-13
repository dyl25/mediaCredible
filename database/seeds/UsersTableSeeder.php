<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            "role_id" => "3",
            "name" => "epfc",
            "email" => "epfc@example.io",
            "password" => bcrypt("epfc12"),
            "created_at" => new DateTime()
        ]);
        DB::table('users')->insert([
            "role_id" => "2",
            "name" => "credib",
            "email" => "credib@example.io",
            "password" => bcrypt("credib12"),
            "created_at" => new DateTime()
        ]);

        for ($i = 0; $i < 50; $i++) {
            \Illuminate\Support\Facades\DB::table('users')->insert([
                'role_id' => 2,
                'name' => "MarcDoe$i",
                'email' => "Marc$i@doe.com",
                'password' => bcrypt('0000')
            ]);
        }

    }
}
