<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FixedTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fixed_tasks')->insert([
            'fixed_activity_id' => 5,
            'title' => 'Buscar información'
        ]);

        DB::table('fixed_tasks')->insert([
            'fixed_activity_id' => 5,
            'title' => 'Redactar Antecedentes'
        ]);

        DB::table('fixed_tasks')->insert([
            'fixed_activity_id' => 6,
            'title' => 'Marco de Referencia'
        ]);
        
    }
}
