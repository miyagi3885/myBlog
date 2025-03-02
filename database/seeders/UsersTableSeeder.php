<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('users')->insert([
                'name' => 'test' . $i,
                'email' => 'test' . $i . '@text.com',
                'password' => Hash::make('pass' . $i),
                'created_at' => Carbon::create(2025, 2, 16, 12, 0, 0)->addSeconds($i * 60),
                'updated_at' => Carbon::create(2025, 2, 16, 12, 0, 0)->addSeconds($i * 60),
            ]);
        }
    }
}
