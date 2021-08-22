<nav class="navbar navbar-expand-lg navbar-light bg-light">
  @if($brand === 'true')
     <a class="navbar-brand" href="{{route($route)}}">
     @isset($logo)
      <img height="150" width="150" src="{{$logo}}"/>
      @else
          @isset($text)
          <h2>{{$text}}</h2>
        @endisset
    @endisset
   </a>
  @endif
    <div class="container-fluid">
            @if($sidebar)<button type="button" id="sidebarCollapse" class="btn">
              <i class=" d-none d-md-inline fa fa-{{$icon}}"></i>
              <i class=" d-md-none fa fa-arrow-left"></i>
            </button>
            @endif
        {{$slot}}
    </div>
</nav>