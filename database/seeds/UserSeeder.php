<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  =>  'Fábio', 
            'email' => 'fabio@mail.com', 
            'category'  =>  'owner',
            'email_verified_at' => now(),
            'password'  => Hash::make('teste!@#'),
        ]);

        User::create([
            'name'  =>  'Júlio', 
            'email' => 'julio@mail.com', 
            'category'  =>  'technician',
            'email_verified_at' => now(), 
            'password'  => Hash::make('teste!@#'),
        ]);
    }
}
