<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    // 主キーカラムを変更
    protected $primaryKey = 'customer_id';
    // オートインクリメント無効化
    public $incrementing = false;

    // 操作可能なカラムを定義
    protected $fillable = [
        'customer_id',
        'customer_name',
        'control_base_id',
    ];

    // 拠点情報を取得
    public function base()
    {
        return $this->belongsTo(Base::class, 'control_base_id', 'base_id');
    }
}
