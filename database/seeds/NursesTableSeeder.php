<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class NursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for($i=1; $i<=50; $i++){
            App\Nurses::create([
                'name'=>$faker->name,
                'username'=>$faker->username,
                'contact'=>'0716458023',
                'number'=>'345',


            ]);
        }
    }
}
