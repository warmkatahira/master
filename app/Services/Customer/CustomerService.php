<?php

namespace App\Services\Customer;

use Carbon\Carbon;
use App\Models\Customer;

class CustomerService
{
    // 顧客情報を取得
    public function getCustomer()
    {
        $customers = Customer::Join('bases', 'customers.control_base_id', 'bases.base_id')
                    ->orderBy('base_sort_num', 'asc')
                    ->get();
        return $customers;
    }

    // 顧客を追加
    public function registerCustomer($request)
    {
        // レコードを追加
        Customer::create([
            'customer_id' => $request->customer_id,
            'customer_name' => $request->customer_name,
            'control_base_id' => $request->control_base_id,
        ]);
        return;
    }
}