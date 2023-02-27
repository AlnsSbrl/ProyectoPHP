<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EscuderiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = "https://ergast.com/api/f1/2022/constructors.json";
        $data = file_get_contents($file);
        $json = json_decode($data);
        $escuderias = $json->MRData->ConstructorTable->Constructors;
        foreach ($escuderias as $valor) {
            DB::table('escuderias')->insert([
                'nombre' => $valor->name,
                'nacionalidad' => $valor->nationality
            ]);
        }
    }
}
