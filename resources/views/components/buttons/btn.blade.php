
<button type="button" class="btn btn-block btn-@if($outline == 'true') {{'outilne-'}} @endif $type}}">@if($icon == ''){{$text}}@endif
    @isset($icon)
        <i class="fas fa-{{$icon}}"></i>
        <span>{{$text}}</span>
    @endisset
</button>