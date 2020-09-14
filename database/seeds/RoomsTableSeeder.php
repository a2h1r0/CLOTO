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
        $names = ['101', '102', '103', '104', '105'];
        foreach ($names as $name) {
            Room::insert(['name' => $name]);
        }
    }
}
