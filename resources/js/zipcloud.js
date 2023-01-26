// 郵便番号の要素を取得
const zip_code_1 = document.getElementById('zip_code_1');
const zip_code_2 = document.getElementById('zip_code_2');
// 住所1の要素を取得
const address_1 = document.getElementById('address_1');

// 住所を取得ボタンが押下されたら
$("[id=zipcloud_enter]").on("click",function(){
    try {
        // 郵便番号が入力されているか
        if ((zip_code_1.value + zip_code_2.value).length != 7) {
            throw new Error('郵便番号が正しくありません。');
        }
        // 郵便番号を取得
        const zip_code = zip_code_1.value + zip_code_2.value;
        // 環境でパスを可変させる
        if(process.env.MIX_APP_ENV === 'local'){
            var ajax_url = '/api/zipcloud/' + zip_code;
        }
        if(process.env.MIX_APP_ENV === 'pro'){
            var ajax_url = '/master/api/zipcloud/' + zip_code;
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: ajax_url,
            type: 'GET',
            dataType: 'json',
            success: function(data){
                // 住所が取得できない場合
                if(data['result']['results'] == null){
                    alert('住所が取得できませんでした。');
                }
                // 取得した住所を反映
                if(data['result']['results'] != null){
                    address_1.value = data['result']['results'][0]['address1'] + data['result']['results'][0]['address2'] + data['result']['results'][0]['address3'];
                }
            },
            error: function(){
                alert('失敗');
            }
        });
    } catch (e) {
        alert(e.message);
    }
});