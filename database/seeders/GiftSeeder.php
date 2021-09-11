<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gifts')->insert([
            'id' => 1,
            'name' => 'Vajilla',
            'date' => '2021-07-21',
            'exception' => '',
        ]);
    }
}
