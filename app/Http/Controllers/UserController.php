<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\User\UserService;

class UserController extends Controller
{
    public function index()
    {
        // サービスクラスを定義
        $UserService = new UserService;
        // ユーザー情報を取得
        $users = $UserService->getUser();
        return view('user.index')->with([
            'users' => $users,
        ]);
    }
}
