<x-app-layout>
    <!-- ヘッダー -->
    <x-header content="権限" />
    <!-- ボタン -->
    <div class="grid grid-cols-12 gap-x-3">
        <x-button-1 :href="route('role.register_index')" content="追加" />
    </div>
    <!-- 権限一覧 -->
    <div class="grid grid-cols-12 mt-5">
        <table class="col-span-4 text-sm">
            <thead>
                <tr class="text-left text-white bg-gray-600 border-gray-600">
                    <th class="font-thin py-1 px-2 w-4/12 text-center">権限ID</th>
                    <th class="font-thin py-1 px-2 w-5/12 text-center">権限名</th>
                    <th class="font-thin py-1 px-2 w-3/12 text-center">人数</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($roles as $role)
                    <tr>
                        <td class="py-1 px-2 border text-center">{{ $role->role_id }}</td>
                        <td class="py-1 px-2 border text-center">{{ $role->role_name }}</td>
                        <td class="py-1 px-2 border text-center">{{ $role->relation_user_count() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
