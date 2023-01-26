<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    // 主キーカラムを変更
    protected $primaryKey = 'role_id';
    // オートインクリメント無効化
    public $incrementing = false;

    // 操作可能なカラムを定義
    protected $fillable = [
        'role_id',
        'role_name',
    ];

    // 権限に紐付いているユーザー数を取得
    public function relation_user_count()
    {
        return $this->hasMany(User::class, 'role_id', 'role_id')->count();
    }
}
