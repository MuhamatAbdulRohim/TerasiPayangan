<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas =[
            [
                'id' => 1,
                'name' => 'abdul rohim',
                'email' => 'abdulrohim@gmail.com',
                'password' => bcrypt('rohim'),
                'created_at' => Carbon::now('Asia/Jakarta')->toDateTimeString(),
                'updated_at' => Carbon::now('Asia/Jakarta')->toDateTimeString()
            ],
            [
                'id' => 2,
                'name' => 'abdul rohim',
                'email' => 'adjie@gmail.com',
                'password' => bcrypt('adjie'),
                'created_at' => Carbon::now('Asia/Jakarta')->toDateTimeString(),
                'updated_at' => Carbon::now('Asia/Jakarta')->toDateTimeString()
            ]
        ];

        DB::table('users')->insert($datas);
    }
}
