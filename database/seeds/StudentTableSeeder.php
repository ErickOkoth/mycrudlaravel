<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create();
        for($i=1; $i<=20; $i++){
            App\Doctor::create([
                'name'=>$faker->name,
                'username'=>$faker->email,
                'contact'=>'0798013452',


            ]);
        }
    }
}
