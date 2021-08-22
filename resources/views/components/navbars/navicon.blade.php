<li class="nav-item @if (function_exists('currentRoute')) currentRoute(route($route)) @endif}}" id="{{$id}}">
  <a type="button" {{$attributes->merge(['class' => 'nav-link'])}} href="{{route($route)}}"><i class="fas fa-{{$icon}}"></i></a>
</li>