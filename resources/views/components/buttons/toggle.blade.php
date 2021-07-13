

@props(['type' => 'primary', 'size' => 'sm', 'texte', 'style', 'target' => 'actionmodal'])

<button type="button" class="btn btn-del btn-{{$type}} btn-{{$size}} @isset($style) ? btn-{{$style}} : ''@endisset " data-toggle="modal" data-target="#{{$target}}">
  {{$texte}}
</button>
