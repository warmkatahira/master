<!-- 有効の場合 -->
@if($status == 1)
    <span {{ $attributes->merge(['class' => 'bg-pink-300 text-center text-sm rounded-lg px-3 py-1']) }}>有効</span>
@endif
<!-- 無効の場合 -->
@if($status == 0)
    <span {{ $attributes->merge(['class' => 'bg-gray-300 text-center text-sm rounded-lg px-3 py-1']) }}>無効</span>
@endif