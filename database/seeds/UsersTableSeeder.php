<?php

use Illuminate\Database\Seeder;
use \App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'u.d.g.g.g.i.n@gmail.com')->first();

        if (!$user) {
            User::create([
                'name' => 'udgin',
                'email' => 'u.d.g.g.g.i.n@gmail.com',
                'password' => Hash::make('password')
            ]);

        }
    }
}
