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
        //
        $user = new \App\User();
        $user->name = "Admin";
        $user->email = "admin@brilliantjayapondasi.com";
        $user->email_verified_at = null;
        $user->password = \Illuminate\Support\Facades\Hash::make("22brilliantjayapondasi22");
        $user->remember_token = null;
        $user->save();
    }
}
