<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    use HasFactory;
    // 主キーカラムを変更
    protected $primaryKey = 'base_id';
    // オートインクリメント無効化
    public $incrementing = false;

    // 操作可能なカラムを定義
    protected $fillable = [
        'base_id',
        'base_name',
        'base_zip_code_1',
        'base_zip_code_2',
        'base_address_1',
        'base_address_2',
        'base_tel',
        'base_fax',
        'base_sort_num',
    ];
}
