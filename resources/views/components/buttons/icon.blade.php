
<button style="width: auto;" type="button" data="{{$d}}" {{$attributes->merge(['class' => 'btn btn-block btn-icon'])}}>
    @isset($icon)
        <i class="fas fa-{{$icon}}"></i>
    @endisset
</button>