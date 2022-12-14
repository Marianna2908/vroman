<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'is_active'=>1,
            'role_id'=>1,
            'name'=> 'Marianna Ivanova',
            'email'=>'mar-ivanov94@hotmail.com',
            'password'=>bcrypt(12345678),
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'is_active'=>1,
            'role_id'=>2,
            'name'=> 'Katia Viaene',
            'email'=>'vromanconstruct@telenet.be',
            'password'=>bcrypt(12345678),
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }
}
