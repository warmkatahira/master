<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class APIController extends Controller
{
    public function zipcloud(Request $request)
    {
        // zipcloudから郵便番号を元に住所を取得
        $client = new Client();
        $url = 'http://zipcloud.ibsnet.co.jp/api/search';
        $option = [
            'headers' => [
              'Accept' => '*/*',
              'Content-Type' => 'application/x-www-form-urlencoded' 
            ],
            'form_params' => [
              'zipcode' => $request->zip_code
            ]
        ];
        $response = $client->request('POST', $url, $option);
        $result = json_decode($response->getBody()->getContents(), true);
        // 結果を返す
        return response()->json([
            'result' => $result,
        ]);
    }
}
