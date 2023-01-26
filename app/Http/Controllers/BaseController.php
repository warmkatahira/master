<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaseRequest;
use Illuminate\Http\Request;
use App\Services\Base\BaseService;

class BaseController extends Controller
{
    public function index()
    {
        // サービスクラスを定義
        $BaseService = new BaseService;
        // 拠点情報を取得
        $bases = $BaseService->getBase();
        return view('base.index')->with([
            'bases' => $bases,
        ]);
    }

    // 拠点追加フォームへ移動
    public function register_index()
    {
        return view('base.register');
    }

    // 拠点を追加
    public function register(BaseRequest $request)
    {
        // サービスクラスを定義
        $BaseService = new BaseService;
        // 拠点を追加
        $BaseService->registerBase($request);
        return redirect()->route('base.index');
    }
}
