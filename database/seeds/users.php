<?php

use App\User;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        $data = [];
        
        for ($i = 1; $i <= 1 ; $i++) {
            array_push($data, [
                'first_name'     => 'hadji',
                'last_name'     => 'kouceyla',
                'email'    => 'test@example.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'gender'=>'female',
                'profession'=> 'doctor',
                'role'     => 10
            ]);
        }
        
        User::insert($data);
    }
}
