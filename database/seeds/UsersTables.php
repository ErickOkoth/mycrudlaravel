<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class UsersTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker=Faker::create();
       for($i=1; $i<=20; $i++){
           App\User::create([
          'name'=>$faker->name,
          'email'=>$faker->email,
          'password'=>bcrypt('password'),

           ]);
       }
    }
}
