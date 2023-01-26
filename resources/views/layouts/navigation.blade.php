<div class="grid grid-cols-12">
    <p class="col-span-1 text-3xl text-left text-gray-600 inline-block" style="font-family: 'Archivo Black';">MASTER</p>
    <p class="col-start-11 col-span-2 text-base text-right text-gray-600 inline-block pt-3 mr-2">{{ Auth::user()->last_name .' '. Auth::user()->first_name }}</p>
    <ul id="dropmenu" class="inline-block col-start-1 col-span-12">
        <li>
            <a href="{{ route('top.index') }}">Top</a>
        </li>
        <li><a href="#">マスタ</a>
            <ul>
                <li><a href="{{ route('role.index') }}">権限</a></li>
                <li><a href="{{ route('user.index') }}">ユーザー</a></li>
                <li><a href="{{ route('base.index') }}">拠点</a></li>
                <li><a href="{{ route('customer.index') }}">顧客</a></li>
            </ul>
        </li>
        <li><a href="#">API</a>
            <ul>
                <li><a href="">#指定</a></li>
                <li><a href="">テスト</a></li>
            </ul>
        </li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">ログアウト</a></li>
        </form>
    </ul>
</div>