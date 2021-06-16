<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        [
            'name' => 'Ronaldo',
            'email' => 'ronaldo@gmail.com',
            'level' => 'admin',
            'password' => bcrypt('12341234')
        ],
        [
            'name' => 'Samson',
            'email' => 'samson@gmail.com',
            'level' => 'karyawan',
            'password' => bcrypt('11111111')
        ],
        [
            'name' => 'David',
            'email' => 'david@gmail.com',
            'level' => 'pelanggan',
            'password' => bcrypt('11111111')
        ]
    ];
    foreach ($user as $key => $value) {
        User::create($value);
    }
    }
}
