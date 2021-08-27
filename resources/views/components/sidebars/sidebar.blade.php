
<nav id="sidebar">
    <div id="dismiss" class="theme-bg">
        <i class="fa fa-{{$dismiss}}"></i>
    </div>

    <div class="sidebar-header">
        @isset($logo)
           <img src="{{$logo}}"/>
        @else
           <h3>{{$text}}</h3>
        @endisset
    </div>

    <ul class="list-unstyled components">
        {{$slot}}
    </ul>
</nav>
