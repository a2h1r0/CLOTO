<?php

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::insert([
            ['name' => '101'],
            ['name' => '102'],
            ['name' => '103'],
            ['name' => '104'],
            ['name' => '105'],
        ]);
    }
}
