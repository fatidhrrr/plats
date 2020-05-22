<?php

use Illuminate\Database\Seeder;

class SaveurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('saveurs')->insert([
            'saveur' => 'Sucré',
            'saveur' => 'Salé',
        ]);
    }
}
