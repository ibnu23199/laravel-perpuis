<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

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
            'name' => 'Yuda Muhtar',
            'email' => 'yuda@gmail.com',
            'role_id' => '1',
            'password' => bcrypt('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Anggota1',
            'email' => 'anggota@gmail.com',
            'role_id' => '2',
            'jk' => 'L',
            'password' => bcrypt('12345678'),
        ]);
    }
}
