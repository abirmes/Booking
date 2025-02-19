<?php

use Illuminate\Database\Seeder;

class salleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salles')->insert([
            'number' => 1,
            'persan' => 'first persan',
            'evaluation' => 'business class',
            'beds' => 1,
        ]);
    }
}
