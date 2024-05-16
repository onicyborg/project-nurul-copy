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

        DB::table('users')->insert([
            [
                'name' => 'Akhmad Fauzi',
                'email' => 'akhmadfauzy40@gmail.com',
                'nomor_hp' => '081347890520',
                'password' => Hash::make('123kucingberanak'),
                'role' => 'kandidat',
                'gender' => 'pria',
                'tempat_lahir' => 'Martapura',
                'tanggal_lahir' => '2001-03-10',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DB::table('users')->insert([
            [
                'name' => 'User 1',
                'email' => 'user1@gmail.com',
                'nomor_hp' => '081347890520',
                'password' => Hash::make('user1'),
                'role' => 'kandidat',
                'gender' => 'pria',
                'tempat_lahir' => 'Unknown',
                'tanggal_lahir' => '2001-03-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User 2',
                'email' => 'user2@gmail.com',
                'nomor_hp' => '081347890520',
                'password' => Hash::make('user2'),
                'role' => 'kandidat',
                'gender' => 'pria',
                'tempat_lahir' => 'Unknown',
                'tanggal_lahir' => '2001-03-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User 3',
                'email' => 'user3@gmail.com',
                'nomor_hp' => '081347890520',
                'password' => Hash::make('user3'),
                'role' => 'kandidat',
                'gender' => 'pria',
                'tempat_lahir' => 'Unknown',
                'tanggal_lahir' => '2001-03-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User 4',
                'email' => 'user4@gmail.com',
                'nomor_hp' => '081347890520',
                'password' => Hash::make('user4'),
                'role' => 'kandidat',
                'gender' => 'pria',
                'tempat_lahir' => 'Unknown',
                'tanggal_lahir' => '2001-03-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User 5',
                'email' => 'user5@gmail.com',
                'nomor_hp' => '081347890520',
                'password' => Hash::make('user5'),
                'role' => 'kandidat',
                'gender' => 'pria',
                'tempat_lahir' => 'Unknown',
                'tanggal_lahir' => '2001-03-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User 6',
                'email' => 'user6@gmail.com',
                'nomor_hp' => '081347890520',
                'password' => Hash::make('user6'),
                'role' => 'kandidat',
                'gender' => 'pria',
                'tempat_lahir' => 'Unknown',
                'tanggal_lahir' => '2001-03-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User 7',
                'email' => 'user7@gmail.com',
                'nomor_hp' => '081347890520',
                'password' => Hash::make('user7'),
                'role' => 'kandidat',
                'gender' => 'pria',
                'tempat_lahir' => 'Unknown',
                'tanggal_lahir' => '2001-03-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User 8',
                'email' => 'user8@gmail.com',
                'nomor_hp' => '081347890520',
                'password' => Hash::make('user8'),
                'role' => 'kandidat',
                'gender' => 'pria',
                'tempat_lahir' => 'Unknown',
                'tanggal_lahir' => '2001-03-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User 9',
                'email' => 'user9@gmail.com',
                'nomor_hp' => '081347890520',
                'password' => Hash::make('user9'),
                'role' => 'kandidat',
                'gender' => 'pria',
                'tempat_lahir' => 'Unknown',
                'tanggal_lahir' => '2001-03-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User 10',
                'email' => 'user10@gmail.com',
                'nomor_hp' => '081347890520',
                'password' => Hash::make('user10'),
                'role' => 'kandidat',
                'gender' => 'pria',
                'tempat_lahir' => 'Unknown',
                'tanggal_lahir' => '2001-03-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User 11',
                'email' => 'user11@gmail.com',
                'nomor_hp' => '081347890520',
                'password' => Hash::make('user11'),
                'role' => 'kandidat',
                'gender' => 'pria',
                'tempat_lahir' => 'Unknown',
                'tanggal_lahir' => '2001-03-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User 12',
                'email' => 'user12@gmail.com',
                'nomor_hp' => '081347890520',
                'password' => Hash::make('user12'),
                'role' => 'kandidat',
                'gender' => 'pria',
                'tempat_lahir' => 'Unknown',
                'tanggal_lahir' => '2001-03-10',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DB::table('results')->insert([
            [
                'hasil_akhir' => 3.75,
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hasil_akhir' => 2.65,
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hasil_akhir' => 2.85,
                'user_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hasil_akhir' => 2.95,
                'user_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hasil_akhir' => 4,
                'user_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hasil_akhir' => 3.25,
                'user_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hasil_akhir' => 3.10,
                'user_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hasil_akhir' => 3.15,
                'user_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hasil_akhir' => 3.35,
                'user_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hasil_akhir' => 3.40,
                'user_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hasil_akhir' => 2.50,
                'user_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hasil_akhir' => 2.40,
                'user_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hasil_akhir' => 2.10,
                'user_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

    }
}
