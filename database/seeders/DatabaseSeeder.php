<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        // Insert 2 countries
        DB::table('countries')->insert([
            'country_id'=>1,
            'country_description'=>'Ecuador'
        ]);

        DB::table('countries')->insert([
            'country_id'=>2,
            'country_description'=>'Chile'
        ]);

        //Insert States
        DB::table('states')->insert([
            'state_id'=>1,
            'state_description'=>'Chimborazo',
            'country_id'=>1
        ]);

        DB::table('states')->insert([
            'state_id'=>2,
            'state_description'=>'Pichincha',
            'country_id'=>1
        ]);

        DB::table('states')->insert([
            'state_id'=>3,
            'state_description'=>'Estado de Santiago',
            'country_id'=>2
        ]);

        //Insert cities

        DB::table('cities')->insert(([
            'city_id'=>1,
            'city_description'=>'Riobamba',
            'state_id'=>1,
        ]));

        DB::table('cities')->insert(([
            'city_id'=>2,
            'city_description'=>'Lican',
            'state_id'=>1,
        ]));
        DB::table('cities')->insert(([
            'city_id'=>3,
            'city_description'=>'Quito',
            'state_id'=>2,
        ]));
        DB::table('cities')->insert(([
            'city_id'=>4,
            'city_description'=>'Ciudad Santiago',
            'state_id'=>3,
        ]));

        DB::table('users')->insert([
            'user_name'=>'Dario Janeta',
            'user_ci'=>'060393500-8',
            'user_cellphone'=>'0603935008',
            'user_date'=>'1994-09-13',
            'user_email'=>'admin@gmail.com',
            'user_password'=>Hash::make('123456789'),
            'user_city_id'=>1,
            'user_rol'=>1,
        ]);



    }
}
