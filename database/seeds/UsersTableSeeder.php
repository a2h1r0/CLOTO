<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'username' => 'test',
                'email' => 'test@cloto.jp',
                'password' => Hash::make('password'),
                'handlename' => 'test',
                'icon' => 'default.jpg',
                'sns' => json_encode(['twitter' => '', 'github' => '', 'qiita' => '']),
                'setting_notification' => 'All'
            ], [
                'username' => 'test2',
                'email' => 'test2@cloto.jp',
                'password' => Hash::make('password'),
                'handlename' => 'test2',
                'icon' => 'default.jpg',
                'sns' => json_encode(['twitter' => '', 'github' => '', 'qiita' => '']),
                'setting_notification' => 'All'
            ], [
                'username' => 'test3',
                'email' => 'test3@cloto.jp',
                'password' => Hash::make('password'),
                'handlename' => 'test3',
                'icon' => 'default.jpg',
                'sns' => json_encode(['twitter' => '', 'github' => '', 'qiita' => '']),
                'setting_notification' => 'All'
            ], [
                'username' => 'test4',
                'email' => 'test4@cloto.jp',
                'password' => Hash::make('password'),
                'handlename' => 'test4',
                'icon' => 'default.jpg',
                'sns' => json_encode(['twitter' => '', 'github' => '', 'qiita' => '']),
                'setting_notification' => 'All'
            ], [
                'username' => 'test5',
                'email' => 'test5@cloto.jp',
                'password' => Hash::make('password'),
                'handlename' => 'test5',
                'icon' => 'default.jpg',
                'sns' => json_encode(['twitter' => '', 'github' => '', 'qiita' => '']),
                'setting_notification' => 'All'
            ],
        ]);
    }
}
