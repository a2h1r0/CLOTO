<?php

use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            Section::insert(['room_id' => '1', 'role' => '自習']);
        }
        for ($i = 0; $i < 5; $i++) {
            Section::insert(['room_id' => '1', 'role' => '休憩']);
        }
    }
}
