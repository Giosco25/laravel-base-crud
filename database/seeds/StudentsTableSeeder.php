<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student; /* si mette il nome della classe model */

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /* creare una nuova istanza */
        for ($i=0; $i < 20 ; $i++) {
            $new_student = new Student();
            $new_student->name = $faker->name;
            $new_student->lastname = $faker->lastName;
            $new_student->serial_number = $faker->md5;/* Serial number */
            $new_student->email = $faker->email; /* Email */
            $new_student->save();
        }
    }
}
