<?php

namespace App\Services\User;

use Carbon\Carbon;
use App\Models\User;

class UserService
{
    // ユーザー情報を取得
    public function getUser()
    {
        $users = User::all();
        return $users;
    }
}