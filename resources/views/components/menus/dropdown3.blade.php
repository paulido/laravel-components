<div class="dropdown d-inline dropleft">
    <button type="button" class="btn" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" width="45" height="45">
        <img class="rouned-circle" src="{{asset('images/user-icon.png')}}" alt="AVATAR" width="40" height="40">
    </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="user-dropdown">
            {{$slot}}
        </ul>
</div>