<?php

use Illuminate\Database\Seeder;

class CrimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crime')->insert([
            ['name' => 'Concierto por delinquir'],
            ['name' => 'Extorsion'],
            ['name' => 'Uso ilicito de redes sociales'],
            ['name' => 'Hurto'],
            ['name' => 'Porte de estupefacientes'],
            ['name' => 'Tentativa de Hocimicidio'],
            ['name' => 'Homicidio'],
            ['name' => 'Porte Ilegal de armas'],
            ['name' => 'Concusion']
        ]);
    }
}
