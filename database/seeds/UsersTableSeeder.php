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

        \App\User::create([
            'name'  =>  'Jane Doe',
            'email' =>  'jane@doe.me',
            'password'  =>   Hash::make('passer')
        ]);
    }
}
