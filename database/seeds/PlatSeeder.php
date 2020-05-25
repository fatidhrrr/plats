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
            'saveur_id' => 2,
        ]);
        DB::table('plats')->insert([
            'plat' => 'Couscous',
            'saveur_id' => 2,
        ]);
        DB::table('plats')->insert([
            'plat' => 'Tiramisu',
            'saveur_id' => 1,
        ]);
        DB::table('plats')->insert([
            'plat' => 'Gratin',
            'saveur_id' => 2,
        ]);
        DB::table('plats')->insert([
            'plat' => 'Crêpe',
            'saveur_id' => 1,
        ]);
    }
}
