<?php

namespace Database\Seeders;
use Illuminate\Support\facades\DB;
use Illuminate\Support\facades\hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
            
            'name'=>' keerthana',
            'email'=>' keerthana@gmail.com',
            'password'=>hash::make('123456')
        ]);
    }
}
