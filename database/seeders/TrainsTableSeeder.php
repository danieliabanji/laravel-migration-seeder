<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
     for($i=0; $i < 10; $i++){
        $newTrain = new Train();
        $newTrain-> Azienda = $faker->word(2);
        $newTrain-> Stazione_di_partenza = $faker->country();
        $newTrain-> Stazione_di_arrivo = $faker->country();
        $newTrain-> Orario_di_partenza = $faker->time('H:i:s');
        $newTrain-> Orario_di_arrivo = $faker->time('H:i:s');
        $newTrain-> codice_treno = $faker->regexify('[A-Z]{5}[0-4]{3}');
        $newTrain-> numero_carrozze = $faker->randomDigitNotNull();
        $newTrain-> In_orario = $faker->boolean();
        $newTrain->Cancellato = $faker->boolean();

        $newTrain->save();

     }
    }
}
