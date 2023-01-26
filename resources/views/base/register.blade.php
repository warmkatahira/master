<script src="{{ asset('js/zipcloud.js') }}" defer></script>
<x-app-layout>
    <!-- ヘッダー -->
    <x-header content="拠点追加" />
    <!-- 拠点追加フォーム -->
    <div class="grid grid-cols-12 mt-5">
        <form method="post" action="{{ route('base.register') }}" class="m-0 col-span-12 grid grid-cols-12">
            @csrf
            <label for="base_id" class="col-span-1 text-center bg-green-300 py-2 border-y border-l border-black mb-3">拠点ID</label>
            <input type="text" id="base_id" name="base_id" class="col-span-2 border-black mb-3" value="{{ old('base_id') }}" autocomplete="off">
            <label for="base_name" class="col-start-1 col-span-1 text-center bg-green-300 py-2 border-y border-l border-black mb-3">拠点名</label>
            <input type="text" id="base_name" name="base_name" class="col-span-2 border-black mb-3" value="{{ old('base_name') }}" autocomplete="off">
            <div class="col-start-1 col-span-6 grid grid-cols-12">
                <label for="zip_code_1" class="col-start-1 col-span-2 text-center bg-green-300 py-2 border-y border-l border-black mb-3">郵便番号</label>
                <input type="text" id="zip_code_1" name="zip_code_1" class="col-span-2 border-black mb-3" value="{{ old('zip_code_1') }}" autocomplete="off">
                <label class="col-span-1 text-center py-2 mb-3">-</label>
                <input type="text" id="zip_code_2" name="zip_code_2" class="col-span-2 border-black mb-3" value="{{ old('zip_code_2') }}" autocomplete="off">
                <button type="button" id="zipcloud_enter" class="col-span-2 text-sm text-center bg-rose-300 rounded-lg mb-3 ml-5 cursor-pointer">住所を取得</button>
            </div>
            <label for="address_1" class="col-start-1 col-span-1 text-center bg-green-300 py-2 border-y border-l border-black mb-3">住所1</label>
            <input type="text" id="address_1" name="address_1" class="col-span-3 border-black mb-3" value="{{ old('address_1') }}" autocomplete="off">
            <label for="address_2" class="col-start-1 col-span-1 text-center bg-green-300 py-2 border-y border-l border-black mb-3">住所2</label>
            <input type="text" id="address_2" name="address_2" class="col-span-3 border-black mb-3" value="{{ old('address_2') }}" autocomplete="off">
            <label for="tel" class="col-start-1 col-span-1 text-center bg-green-300 py-2 border-y border-l border-black mb-3">電話番号</label>
            <input type="text" id="tel" name="tel" class="col-span-2 border-black mb-3" value="{{ old('tel') }}" autocomplete="off" placeholder="例）000-0000-0000">
            <label for="fax" class="col-start-1 col-span-1 text-center bg-green-300 py-2 border-y border-l border-black mb-3">FAX番号</label>
            <input type="text" id="fax" name="fax" class="col-span-2 border-black mb-3" value="{{ old('fax') }}" autocomplete="off" placeholder="例）000-0000-0000">
            <x-button-2 class="col-start-1 mt-5" content="追加" />
        </form>
    </div>
</x-app-layout>
