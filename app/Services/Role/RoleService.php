<?php

namespace App\Services\Role;

use Carbon\Carbon;
use App\Models\Role;

class RoleService
{
    // 権限情報を取得
    public function getRole()
    {
        $roles = Role::all();
        return $roles;
    }

    // 権限を追加
    public function registerRole($request)
    {
        // レコードを追加
        Role::create([
            'role_id' => $request->role_id,
            'role_name' => $request->role_name,
        ]);
        return;
    }
}