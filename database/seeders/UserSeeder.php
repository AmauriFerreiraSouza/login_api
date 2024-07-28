<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        if (!User::where('email', 'amauiridesouzaferreira@gmail.com')->first()) {
            $admin = User::create([
                'name' => 'Amauri',
                'email' => 'amauiridesouzaferreira@gmail.com',
                'password' => Hash::make('12345a', ['rounds' => 12])
            ]);
        }

        if (!User::where('email', 'dalliversouza@gmail.com')->first()) {
            $admin = User::create([
                'name' => 'Dalliver',
                'email' => 'dalliversouza@gmail.com',
                'password' => Hash::make('12345a', ['rounds' => 12])
            ]);

        }

        if (!User::where('email', 'alefsouzaferreira@gmail.com')->first()) {
            $admin = User::create([
                'name' => 'Alef',
                'email' => 'alefsouzaferreira@gmail.com',
                'password' => Hash::make('12345a', ['rounds' => 12])
            ]);

        }

        if (!User::where('email', 'chanadesouzaferreira@gmail.com')->first()) {
            $admin = User::create([
                'name' => 'Chana',
                'email' => 'chanadesouzaferreira@gmail.com',
                'password' => Hash::make('12345a', ['rounds' => 12])
            ]);

        }
    }
}
