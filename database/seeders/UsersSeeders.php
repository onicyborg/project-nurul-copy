<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Log;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_recruitment')->insert([
            [
                'status' => 'in_progress',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

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
                'name' => 'Kandidat',
                'email' => 'kandidat@gmail.com',
                'nomor_hp' => '081308130813',
                'password' => Hash::make('kandidat'),
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

        $faker = Faker::create();

        for ($i = 2; $i <= 13; $i++) {
            DB::table('test')->insert([
                'soal_1' => $faker->numberBetween(1, 4),
                'soal_2' => $faker->numberBetween(1, 4),
                'soal_3' => $faker->numberBetween(1, 4),
                'soal_4' => $faker->numberBetween(1, 4),
                'soal_5' => $faker->numberBetween(1, 4),
                'soal_6' => $faker->numberBetween(1, 4),
                'soal_7' => $faker->numberBetween(1, 4),
                'soal_8' => $faker->numberBetween(1, 4),
                'soal_9' => $faker->numberBetween(1, 4),
                'soal_10' => $faker->numberBetween(1, 4),
                'soal_11' => $faker->numberBetween(1, 4),
                'soal_12' => $faker->numberBetween(1, 4),
                'soal_13' => $faker->numberBetween(1, 4),
                'soal_14' => $faker->numberBetween(1, 4),
                'soal_15' => $faker->numberBetween(1, 4),
                'user_id' => $i
            ]);
        }

        $tests = DB::table('test')->get();

        $idealValues = [
            1 => 4,
            2 => 4,
            3 => 4,
            4 => 4,
            5 => 4,
            6 => 4,
            7 => 4,
            8 => 4,
            9 => 4,
            10 => 4,
            11 => 4,
            12 => 4,
            13 => 4,
            14 => 4,
            15 => 4,
        ];

        $bobots = [
            1 => 10,
            2 => 15,
            3 => 10,
            4 => 10,
            5 => 5,
            6 => 5,
            7 => 5,
            8 => 5,
            9 => 5,
            10 => 5,
            11 => 5,
            12 => 5,
            13 => 5,
            14 => 5,
            15 => 5,
        ];

        foreach ($tests as $test) {
            $total_score = 0;

            for ($i = 1; $i <= 15; $i++) {
                $jawaban = $test->{"soal_$i"};
                $idealValue = $idealValues[$i];
                $gap = $idealValue - $jawaban;

                // Convert gap to score
                if ($gap == 0) {
                    $score = 5;
                } elseif (abs($gap) == 1) {
                    $score = 4;
                } elseif (abs($gap) == 2) {
                    $score = 3;
                } elseif (abs($gap) == 3) {
                    $score = 2;
                } else {
                    $score = 1;
                }

                // Multiply the score by the weight of the criteria
                $bobot = $bobots[$i];
                $total_score += $score * ($bobot / 100);
            }

            // Log the total score before saving to the database
            Log::info('Total Score: ' . $total_score);

            // Store the candidate's total score in the database
            DB::table('results')->insert([
                'hasil_akhir' => $total_score,
                'user_id' => $test->user_id,
            ]);
        }

    }
}
