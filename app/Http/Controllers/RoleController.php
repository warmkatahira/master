<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use App\Services\Role\RoleService;

class RoleController extends Controller
{
    public function index()
    {
        // サービスクラスを定義
        $RoleService = new RoleService;
        // 権限情報を取得
        $roles = $RoleService->getRole();
        return view('role.index')->with([
            'roles' => $roles,
        ]);
    }

    // 権限追加フォームへ移動
    public function register_index()
    {
        return view('role.register');
    }

    // 権限を追加
    public function register(RoleRequest $request)
    {
        // サービスクラスを定義
        $RoleService = new RoleService;
        // 権限情報を取得
        $RoleService->registerRole($request);
        return redirect()->route('role.index');
    }
}
