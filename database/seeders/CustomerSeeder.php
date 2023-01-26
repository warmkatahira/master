<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'customer_id' => 'test',
            'customer_name' => '株式会社テスト',
            'control_base_id' => 'warm_ho',
        ]);
        Customer::create([
            'customer_id' => 'xxx',
            'customer_name' => '株式会社XXX',
            'control_base_id' => 'warm_ho',
        ]);
    }
}
