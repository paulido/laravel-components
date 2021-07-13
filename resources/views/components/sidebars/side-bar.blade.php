
<nav id="sidebar">
    <div id="dismiss">
        <i class="fa fa-arrow-left"></i>
    </div>

    <div class="sidebar-header">
        <h3>Mailer</h3>
    </div>

    <ul class="list-unstyled components">
        <p>{{auth()->user()->name}}</p>

        
        <li class="{{currentRoute(route('mail.dashboard'))}}">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">@lang('Dashboard')</a>
        </li>
        <li class="{{currentRoute(route('mail.create'))}}">
            <a href="{{route('mail.create')}}"><i class="fas fa-envelope mr-2"></i>@lang('New')</a>
        </li>
        <li class="{{currentRoute(route('mail.sentbox'))}}">
            <a href="{{route('mail.sentbox')}}"><i class="fas fa-envelope mr-2"></i>@lang('Sent')</a>
        </li>
        <li class="{{currentRoute(route('mail.trash'))}}">
            <a href="{{route('mail.trash')}}"><i class="fas fa-trash mr-2">&nbsp;</i>@lang('Trash')</a>
        </li>
        <li class="{{currentRoute(route('contact.create'))}}">
            <a href="{{route('contact.create')}}"><i class="far fa-address-book mr-2"></i>@lang('Contacts')</a>
        </li>
        <li class="{{currentRoute(route('contact.index'))}}">
            <a href="{{route('contact.index')}}"><i class="far fa-address-book mr-2"></i>@lang('List')</a>
        </li>
        
    </ul>
</nav>
