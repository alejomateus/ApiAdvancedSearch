<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city')->insert([
            ['name' => 'AMAZONAS'],
            ['name' => 'ANTIOQUIA'],
            ['name' => 'ARAUCA'],
            ['name' => 'ATLÁNTICO'],
            ['name' => 'BOLÍVAR'],
            ['name' => 'BOYACÁ'],
            ['name' => 'CALDAS'],
            ['name' => 'CAQUETÁ'],
            ['name' => 'CASANARE'],
            ['name' => 'CAUCA'],
            ['name' => 'CESAR'],
            ['name' => 'CHOCÓ'],
            ['name' => 'CÓRDOBA'],
            ['name' => 'CUNDINAMARCA'],
            ['name' => 'BOGOTA D.C.'],
            ['name' => 'GUAINÍA'],
            ['name' => 'GUAVIARE'],
            ['name' => 'HUILA'],
            ['name' => 'LA GUAJIRA'],
            ['name' => 'MAGDALENA'],
            ['name' => 'META'],
            ['name' => 'NARIÑO'],
            ['name' => 'NORTE DE SANTANDER'],
            ['name' => 'PUTUMAYO'],
            ['name' => 'QUINDÍO'],
            ['name' => 'RISARALDA'],
            ['name' => 'SAN ANDRÉS Y PROVIDENCIA'],
            ['name' => 'SANTANDER'],
            ['name' => 'SUCRE'],
            ['name' => 'TOLIMA'],
            ['name' => 'VALLE DEL CAUCA'],
            ['name' => 'VAUPÉS'],
            ['name' => 'VICHADA']
        ]);
    }
}
