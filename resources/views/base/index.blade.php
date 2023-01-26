<x-app-layout>
    <!-- ヘッダー -->
    <x-header content="拠点" />
    <!-- ボタン -->
    <div class="grid grid-cols-12 gap-x-3">
        <x-button-1 :href="route('base.register_index')" content="追加" />
    </div>
    <!-- 拠点一覧 -->
    <div class="grid grid-cols-12 mt-5">
        <table class="col-span-10 text-sm">
            <thead>
                <tr class="text-left text-white bg-gray-600 border-gray-600">
                    <th class="font-thin py-1 px-2 w-2/12 text-center">拠点ID</th>
                    <th class="font-thin py-1 px-2 w-2/12 text-center">拠点名</th>
                    <th class="font-thin py-1 px-2 w-1/12 text-center">郵便番号</th>
                    <th class="font-thin py-1 px-2 w-3/12 text-center">住所</th>
                    <th class="font-thin py-1 px-2 w-2/12 text-center">電話番号</th>
                    <th class="font-thin py-1 px-2 w-2/12 text-center">FAX番号</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($bases as $base)
                    <tr>
                        <td class="py-1 px-2 border text-left">{{ $base->base_id }}</td>
                        <td class="py-1 px-2 border text-left">{{ $base->base_name }}</td>
                        <td class="py-1 px-2 border text-center">{{ $base->base_zip_code_1 .'-'. $base->base_zip_code_2 }}</td>
                        <td class="py-1 px-2 border text-left">{{ $base->base_address_1 . $base->base_address_2 }}</td>
                        <td class="py-1 px-2 border text-center">{{ $base->base_tel }}</td>
                        <td class="py-1 px-2 border text-center">{{ $base->base_fax }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
