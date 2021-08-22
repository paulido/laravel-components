<div {{ $attributes->merge(['class' => 'card'])}}>
    <div class="card-header mycard-header"><h1>{{$title}}</h1></div>
    <div class="card-body">
      {{$slot}}
    </div>
    <div class="card-footer mycard-footer">
        @if($submit)<button class="btn btn-{{$btnStyle}} float-right" type="submit" id="{{$btnId}}">{{$text}}</button>@endif
    </div>
</div>