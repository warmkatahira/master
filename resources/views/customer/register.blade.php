<x-app-layout>
    <!-- ヘッダー -->
    <x-header content="顧客追加" />
    <!-- 顧客追加フォーム -->
    <div class="grid grid-cols-12 mt-5">
        <form method="post" action="{{ route('customer.register') }}" class="m-0 col-span-12 grid grid-cols-12">
            @csrf
            <label for="customer_id" class="col-span-1 text-center bg-green-300 py-2 border-y border-l border-black mb-3">顧客ID</label>
            <input type="text" id="customer_id" name="customer_id" class="col-span-2 border-black mb-3" autocomplete="off">
            <label for="customer_name" class="col-start-1 col-span-1 text-center bg-green-300 py-2 border-y border-l border-black mb-3">顧客名</label>
            <input type="text" id="customer_name" name="customer_name" class="col-span-3 border-black mb-3" autocomplete="off">
            <label for="control_base_id" class="col-start-1 col-span-1 text-center bg-green-300 py-2 border-y border-l border-black mb-3">管轄拠点</label>
            <select id="control_base_id" name="control_base_id" class="col-span-3 border-black mb-3">
                @foreach($bases as $base)
                    <option value="{{ $base->base_id }}">{{ $base->base_name }}</option>
                @endforeach
            </select>
            <x-button-2 class="col-start-1 mt-5" content="追加" />
        </form>
    </div>
</x-app-layout>
