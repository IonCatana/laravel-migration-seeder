<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $train = new Train();
            $train->company = $faker->word();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();            
            $train->code = $faker->bothify('????-#####');
            $train->carriages = $faker->numberBetween(1, 100);
            $train->is_on_time = $faker->numberBetween(0, 1);
            $train->is_deleted = $faker->numberBetween(0, 1);
            $train->save();
        }
    }
}
