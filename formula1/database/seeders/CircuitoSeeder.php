<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CircuitoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = "https://ergast.com/api/f1/2022/circuits.json";
        $data = file_get_contents($file);
        $json = json_decode($data);
        $escuderias= $json->MRData->CircuitTable->Circuits;
        foreach($escuderias as $valor){
            DB::table('circuitos')->insert([
                'nombre'=>$valor->circuitName,
                'pais'=>$valor->Location->country,
                'vueltas'=>50
            ]);
        }
    }
}
