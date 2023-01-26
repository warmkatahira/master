<x-app-layout>
    <!-- ヘッダー -->
    <x-header content="ユーザー" />
    <!-- ボタン -->
    <div class="grid grid-cols-12 gap-x-3">
        <x-button-1 :href="route('role.register_index')" content="追加" />
    </div>
    <!-- ユーザー一覧 -->
    <div class="grid grid-cols-12 mt-5">
        <table class="col-span-10 text-sm">
            <thead>
                <tr class="text-left text-white bg-gray-600 border-gray-600">
                    <th class="font-thin py-1 px-2 w-2/12 text-center">ユーザー名</th>
                    <th class="font-thin py-1 px-2 w-4/12 text-center">メールアドレス</th>
                    <th class="font-thin py-1 px-2 w-2/12 text-center">権限</th>
                    <th class="font-thin py-1 px-2 w-2/12 text-center">所属拠点</th>
                    <th class="font-thin py-1 px-2 w-2/12 text-center">ステータス</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($users as $user)
                    <tr>
                        <td class="py-1 px-2 border text-center">{{ $user->last_name .' '. $user->first_name }}</td>
                        <td class="py-1 px-2 border text-left">{{ $user->email }}</td>
                        <td class="py-1 px-2 border text-center">{{ $user->role->role_name }}</td>
                        <td class="py-1 px-2 border text-center">{{ $user->base->base_name }}</td>
                        <td class="py-1 px-2 border text-center"><x-user-status :status="$user->status"/></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
