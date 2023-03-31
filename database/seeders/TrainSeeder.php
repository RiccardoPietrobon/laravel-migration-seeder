<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        for ($i = 0; $i < 20; $i++) {
            $train = new Train;
            $train->Azienda = $faker->word();
            $train->StazioneDiPartenza = $faker->city();
            $train->StazioneDiArrivo = $faker->city();
            $train->OrarioDiPartenza = $faker->time();
            $train->OrarioDiArrivo = $faker->time();
            $train->CodiceTreno = $faker->ean8();
            $train->NumeroCarrozze = $faker->randomDigit();
            $train->InOrario = $faker->boolean();
            $train->Cancellato = $faker->boolean();

            $train->save();
        }
    }
}
