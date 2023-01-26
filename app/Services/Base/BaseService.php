<?php

namespace App\Services\Base;

use Carbon\Carbon;
use App\Models\Base;

class BaseService
{
    // 拠点情報を取得
    public function getBase()
    {
        $roles = Base::orderBy('base_sort_num', 'asc')->get();
        return $roles;
    }

    // 拠点を追加
    public function registerBase($request)
    {
        // レコードを追加
        Base::create([
            'base_id' => $request->base_id,
            'base_name' => $request->base_name,
            'base_zip_code_1' => $request->zip_code_1,
            'base_zip_code_2' => $request->zip_code_2,
            'base_address_1' => $request->address_1,
            'base_address_2' => $request->address_2,
            'base_tel' => $request->tel,
            'base_fax' => $request->fax,
            'base_sort_num' => 99,
        ]);
        return;
    }
}