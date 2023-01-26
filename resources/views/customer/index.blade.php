<x-app-layout>
    <!-- ヘッダー -->
    <x-header content="顧客" />
    <!-- ボタン -->
    <div class="grid grid-cols-12 gap-x-3">
        <x-button-1 :href="route('customer.register_index')" content="追加" />
    </div>
    <!-- 顧客一覧 -->
    <div class="grid grid-cols-12 mt-5">
        <table class="col-span-5 text-sm">
            <thead>
                <tr class="text-left text-white bg-gray-600 border-gray-600">
                    <th class="font-thin py-1 px-2 w-3/12 text-center">顧客ID</th>
                    <th class="font-thin py-1 px-2 w-5/12 text-center">顧客名</th>
                    <th class="font-thin py-1 px-2 w-4/12 text-center">管轄拠点</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($customers as $customer)
                    <tr>
                        <td class="py-1 px-2 border text-center">{{ $customer->customer_id }}</td>
                        <td class="py-1 px-2 border text-left">{{ $customer->customer_name }}</td>
                        <td class="py-1 px-2 border text-left">{{ $customer->base->base_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
