<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar roles
        DB::table('rols')->insert([
            ['nom_rol' => 'admin'],
            ['nom_rol' => 'registrat'],
        ]);
    }
}
