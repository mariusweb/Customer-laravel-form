<?php

namespace Database\Seeders;

use App\Models\Darbuotojai;
use Illuminate\Database\Seeder;

class DarbuotojaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $darbuotojas = new Darbuotojai();
        $darbuotojas->name = 'Tomas';
        $darbuotojas->surname = 'Tomaitis';
        $darbuotojas->save();

        $darbuotojas = new Darbuotojai();
        $darbuotojas->name = 'Marius';
        $darbuotojas->surname = 'Mariausias';
        $darbuotojas->save();

        $darbuotojas = new Darbuotojai();
        $darbuotojas->name = 'Rasa';
        $darbuotojas->surname = 'Rasiausia';
        $darbuotojas->save();
    }
}
