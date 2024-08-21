@props(['titleMyComp' => 'def_title', 'src' => null, 'name' => 'def_name', 'img'])
<div>
{{--    @foreach($products as $p)--}}
{{--        {{ $p->name }}--}}
{{--    @endforeach--}}

    <br>
    {{ $titleMyComp }} from my-comp
    <br><br>

    <x-img.index :src="$img" />
    <br>
</div>
