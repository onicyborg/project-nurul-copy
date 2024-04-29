<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'HRD',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'hrd',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // DB::table('users')->insert([
        //     [
        //         'name' => 'Akhmad Fauzi',
        //         'email' => 'akhmadfauzy40@gmail.com',
        //         'nomor_hp' => '081347890520',
        //         'password' => Hash::make('123kucingberanak'),
        //         'role' => 'kandidat',
        //         'gender' => 'pria',
        //         'tempat_lahir' => 'Martapura',
        //         'tanggal_lahir' => '2001-03-10',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // ]);

    }
}
