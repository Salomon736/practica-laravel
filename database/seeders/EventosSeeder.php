<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i<15; $i++){
            DB::table('eventos')->insert([
                'descripcions'=>Str::random(15),
                'ticket_numero'=>random_int(100, 999)
            ]);
        }
    }
}
