<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;
use App\Services\Customer\CustomerService;
use App\Services\Base\BaseService;

class CustomerController extends Controller
{
    public function index()
    {
        // サービスクラスを定義
        $CustomerService = new CustomerService;
        // 顧客情報を取得
        $customers = $CustomerService->getCustomer();
        return view('customer.index')->with([
            'customers' => $customers,
        ]);
    }

    // 顧客追加フォームへ移動
    public function register_index()
    {
        // サービスクラスを定義
        $BaseService = new BaseService;
        // 拠点情報を取得
        $bases = $BaseService->getBase();
        return view('customer.register')->with([
            'bases' => $bases,
        ]);
    }

    // 顧客を追加
    public function register(CustomerRequest $request)
    {
        // サービスクラスを定義
        $CustomerService = new CustomerService;
        // 顧客を追加
        $CustomerService->registerCustomer($request);
        return redirect()->route('customer.index');
    }
}
