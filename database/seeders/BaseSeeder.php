<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Base;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Base::create([
            'base_id' => 'warm_ho',
            'base_name' => '本社',
            'base_zip_code_1' => '340',
            'base_zip_code_2' => '0822',
            'base_address_1' => '埼玉県八潮市大瀬',
            'base_address_2' => '921-2',
            'base_tel' => '048-995-0001',
            'base_fax' => '048-995-0707',
            'base_sort_num' => 1,
        ]);
        Base::create([
            'base_id' => 'warm_1st',
            'base_name' => '第1営業所',
            'base_zip_code_1' => '340',
            'base_zip_code_2' => '0815',
            'base_address_1' => '埼玉県八潮市八潮',
            'base_address_2' => '5-5-2',
            'base_tel' => '048-995-2000',
            'base_fax' => '048-995-6500',
            'base_sort_num' => 2,
        ]);
        Base::create([
            'base_id' => 'warm_2nd',
            'base_name' => '第2営業所',
            'base_zip_code_1' => '340',
            'base_zip_code_2' => '0831',
            'base_address_1' => '埼玉県八潮市南後谷',
            'base_address_2' => '159-8福山通運内B1',
            'base_tel' => '048-932-7200',
            'base_fax' => '048-932-7211',
            'base_sort_num' => 3,
        ]);
        Base::create([
            'base_id' => 'warm_3rd',
            'base_name' => '第3営業所',
            'base_zip_code_1' => '343',
            'base_zip_code_2' => '0824',
            'base_address_1' => '埼玉県越谷市流通団地',
            'base_address_2' => '1-1-9ホダカ内',
            'base_tel' => '048-990-1000',
            'base_fax' => '048-990-1001',
            'base_sort_num' => 4,
        ]);
        Base::create([
            'base_id' => 'warm_4th',
            'base_name' => '第4営業所',
            'base_zip_code_1' => '340',
            'base_zip_code_2' => '0807',
            'base_address_1' => '埼玉県八潮市新町',
            'base_address_2' => '66',
            'base_tel' => '048-930-0011',
            'base_fax' => '048-930-0021',
            'base_sort_num' => 5,
        ]);
        Base::create([
            'base_id' => 'warm_logistation',
            'base_name' => 'ロジステーション',
            'base_zip_code_1' => '340',
            'base_zip_code_2' => '0811',
            'base_address_1' => '埼玉県八潮市二丁目',
            'base_address_2' => '996',
            'base_tel' => '048-998-2000',
            'base_fax' => '048-998-1177',
            'base_sort_num' => 6,
        ]);
        Base::create([
            'base_id' => 'warm_logiport',
            'base_name' => 'ロジポート',
            'base_zip_code_1' => '340',
            'base_zip_code_2' => '0834',
            'base_address_1' => '埼玉県八潮市大曽根',
            'base_address_2' => '946',
            'base_tel' => '048-997-0100',
            'base_fax' => '048-997-0500',
            'base_sort_num' => 7,
        ]);
        Base::create([
            'base_id' => 'warm_logicontact',
            'base_name' => 'ロジコンタクト',
            'base_zip_code_1' => '340',
            'base_zip_code_2' => '0822',
            'base_address_1' => '埼玉県八潮市大瀬',
            'base_address_2' => '921-2',
            'base_tel' => '048-995-0003',
            'base_fax' => '048-995-0005',
            'base_sort_num' => 8,
        ]);
        Base::create([
            'base_id' => 'warm_logistationplus',
            'base_name' => 'ロジステーションプラス',
            'base_zip_code_1' => '340',
            'base_zip_code_2' => '0813',
            'base_address_1' => '埼玉県八潮市木曽根',
            'base_address_2' => '503-1',
            'base_tel' => '048-995-0101',
            'base_fax' => '048-995-0121',
            'base_sort_num' => 9,
        ]);
        Base::create([
            'base_id' => 'warm_hiroshima',
            'base_name' => '広島営業所',
            'base_zip_code_1' => '736',
            'base_zip_code_2' => '0003',
            'base_address_1' => '広島県安芸郡海田町曽田',
            'base_address_2' => '2-55',
            'base_tel' => '082-554-7620',
            'base_fax' => '082-554-7621',
            'base_sort_num' => 10,
        ]);
    }
}
