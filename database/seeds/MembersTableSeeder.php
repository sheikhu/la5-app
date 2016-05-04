<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Member::create([
            'gender'  =>  'M',
            'active' =>  true,
            'user_id' => 1
        ]);

        \App\Member::create([
            'gender'  =>  'F',
            'active' =>  false,
            'user_id' => 2
        ]);
    }
}
