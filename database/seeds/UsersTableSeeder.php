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
        \App\User::create([
            'name'  =>  'Sheikhu',
            'email' =>  'sheikhu02@gmail.com',
            'password'  =>   Hash::make('passer')
        ]);
    }
}
