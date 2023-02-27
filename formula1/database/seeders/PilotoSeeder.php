<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Escuderia;

class PilotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = "https://ergast.com/api/f1/2022/drivers.json";
        $data = file_get_contents($file);
        $json = json_decode($data);
        $pilotos= $json->MRData->DriverTable->Drivers;
        $escuderias =Escuderia::pluck('id')->toArray();
        foreach($pilotos as $valor){
            DB::table('pilotos')->insert([
                'nombre_completo'=>$valor->givenName." ".$valor->familyName,
                'nacionalidad'=>$valor->nationality,
                'escuderia_id'=>$escuderias[array_rand($escuderias)]
            ]);
        }
    }
}
