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
        $usernames = ['test', 'test2', 'test3', 'test4', 'test5'];
        foreach ($usernames as $username) {
            User::insert([
                'username' => $username,
                'email' => $username . '@cloto.jp',
                'password' => Hash::make('password'),
                'handlename' => $username,
                'icon' => 'default.jpg',
                'sns' => json_encode(['twitter' => '', 'github' => '', 'qiita' => '']),
                'setting_notification' => 'All'
            ]);
        }
    }
}
