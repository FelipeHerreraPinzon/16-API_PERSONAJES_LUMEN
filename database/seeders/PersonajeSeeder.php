<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Personaje;

class PersonajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personaje1 =new Personaje();
        $personaje1->nombre = "Leonel Messi";
        $personaje1->profesion = "Futbolista";
        $personaje1->imagen = "Lionel_Messi.jpg";
        $personaje1->save();

        $personaje2 =new Personaje();
        $personaje2->nombre = "Bill Gates";
        $personaje2->profesion = "Informático";
        $personaje2->imagen = "Bill_Gates.jpg";
        $personaje2->save();

        $personaje3 =new Personaje();
        $personaje3->nombre = "Ivan Duque";
        $personaje3->profesion = "Político";
        $personaje3->imagen = "Ivan_Duque.jpg";
        $personaje3->save();

        $personaje4 =new Personaje();
        $personaje4->nombre = "Juan Diego Alvira";
        $personaje4->profesion = "Periodista";
        $personaje4->imagen = "Juan_Diego_Alvira.jpg";
        $personaje4->save();

    }
}
