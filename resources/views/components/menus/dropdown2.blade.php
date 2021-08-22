<div class="btn-group dropleft">
  <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" width="45" height="45">
     <img class="rouned-circle" src="{{asset('images/user-icon.png')}}" alt="AVATAR" width="40" height="40">
  </button>
  <div class="dropdown-menu mydropdown mydropdown-left">
      {{$slot}}
  </div>
</div>