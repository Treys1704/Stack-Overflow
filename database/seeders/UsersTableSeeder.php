<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'admin@gmail.com',
            'admin' => 1
        ]);

        User::create([
            'name' => 'Tresor',
            'password' => bcrypt('tresor'),
            'email' => 'tresor@gmail.com'
        ]);

        User::create([
            'name' => 'Franck',
            'password' => bcrypt('franck'),
            'email' => 'franck@gmail.com'
        ]);
    }
}
