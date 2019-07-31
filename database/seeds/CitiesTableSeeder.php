<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['name' => 'Kharkov'],
            ['name' => 'Kiev'],
            ['name' => 'Odessa'],
        ];

        DB::table('cities')->insert($cities);
    }
}
