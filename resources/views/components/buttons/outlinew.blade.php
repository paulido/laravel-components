
<button type="button" class="btn btn-block btn-outline-warning">@if($icon == ''){{$text}}@endif
    @isset($icon)
        <i class="fas fa-{{$icon}}"></i>
        <span>{{$text}}p</span>
    @endisset
</button>