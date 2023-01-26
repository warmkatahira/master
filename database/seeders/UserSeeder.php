<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'user_id' => 'katahira',
            'last_name' => '片平',
            'first_name' => '貴順',
            'email' => 't.katahira@warm.co.jp',
            'password' => bcrypt('katahira134'),
            'role_id' => 1,
            'status' => 1,
            'affiliation_base_id' => 'warm_ho',
        ]);
    }
}
