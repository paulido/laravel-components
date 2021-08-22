
<button type="button" class="btn btn-block btn-danger">@if($icon == ''){{$text}}@endif
    @isset($icon)
        <i class="fas fa-{{$icon}}"></i>
        <span>{{$text}}</span>
    @endisset
</button>