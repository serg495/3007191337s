<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = [
            ['name' => 'Kharkov Region'],
            ['name' => 'Kiev Region'],
            ['name' => 'Odessa Region'],
        ];

        DB::table('areas')->insert($areas);
    }
}
