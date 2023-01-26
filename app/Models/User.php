<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    // 主キーカラムを変更
    protected $primaryKey = 'user_id';
    // オートインクリメント無効化
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // 操作可能なカラムを定義
    protected $fillable = [
        'user_id',
        'last_name',
        'first_name',
        'email',
        'password',
        'role_id',
        'status',
        'affiliation_base_id',
    ];

    // 権限情報を取得
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }

    // 拠点情報を取得
    public function base()
    {
        return $this->belongsTo(Base::class, 'affiliation_base_id', 'base_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
