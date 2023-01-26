<x-app-layout>
    <!-- ヘッダー -->
    <x-header content="権限追加" />
    <!-- 権限追加フォーム -->
    <div class="grid grid-cols-12 mt-5">
        <form method="post" action="{{ route('role.register') }}" class="m-0 col-span-12 grid grid-cols-12">
            @csrf
            <label for="role_id" class="col-span-1 text-center bg-green-300 py-2 border-y border-l border-black mb-3">権限ID</label>
            <input type="text" id="role_id" name="role_id" class="col-span-1 text-right border-black mb-3" autocomplete="off">
            <label for="role_name" class="col-start-1 col-span-1 text-center bg-green-300 py-2 border-y border-l border-black mb-3">権限名</label>
            <input type="text" id="role_name" name="role_name" class="col-span-2 border-black mb-3" autocomplete="off">
            <x-button-2 class="col-start-1 mt-5" content="追加" />
        </form>
    </div>
</x-app-layout>
