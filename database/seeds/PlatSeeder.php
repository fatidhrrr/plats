<?php

use Illuminate\Database\Seeder;

class PlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plats')->insert([
            'plat' => 'Riz',
            'plat' => 'Couscous',
            'plat' => 'Tajine',
            'plat' => 'Crêpe',
            'plat' => 'Gratin',
        ]);
    }
}
