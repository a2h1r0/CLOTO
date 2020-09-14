<?php

use Illuminate\Database\Seeder;
use App\Models\Seat;

class SeatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
        foreach ($sections as $section) {
            // 各セクションに5席ずつ用意
            for ($i = 0; $i < 5; $i++) {
                Seat::insert(['section_id' => $section]);
            }
        }
    }
}
