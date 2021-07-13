<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-align-justify"></i>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav ml-auto">
    <li class="nav-item active mr-5">
        <!-- <a class="nav-link" href="#"><i class="fas fa-user-circle"></i></a> -->
        {{$slot}}
    </li>
    </ul>
</div>