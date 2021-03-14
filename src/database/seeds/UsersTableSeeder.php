<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'user_name' => 'aaa',
                'display_name' => 'あああ',
                'email' => 'aaa@mail.com',
                'password' => bcrypt('passpass'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'user_name' => 'bbb',
                'display_name' => 'びびび',
                'email' => 'bbb@mail.com',
                'password' => bcrypt('passpass'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'user_name' => 'ccc',
                'display_name' => 'ししし',
                'email' => 'ccc@mail.com',
                'password' => bcrypt('passpass'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
