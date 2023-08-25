<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i<15; $i++){
            DB::table('noticias')->insert([
                'titulo'=>Str::random(15),
                'contenido'=>Str::random(15),
                'eventos_id'=>random_int(1,1)
            ]);
        }
    }
}
