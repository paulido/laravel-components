
<button type="button" {{$attributes->merge(['class' => 'btn btn-block btn-success'])}}>@if($icon == ''){{$text}}@endif
    @isset($icon)
        <i class="fas fa-{{$icon}}"></i>
        <span>{{$text}}</span>
    @endisset
</button>