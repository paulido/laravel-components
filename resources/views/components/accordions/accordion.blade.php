<div class="card">
        <div class="card-header" id="{{$header}}">
            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#{{$collapse}}"
            aria-expanded="true" aria-controls="{{$collapse}}">{{$text}}<span class=" info2 pl-5 ml-5">{{$text2}}</span><span class="info3 pl-5 ml-5">{{$text3}}</span><span class="float-right info4 pl-5 ml-5">{{$text4}}</span><i class="fa fa-angle-up float-right icon"></i></a>
        </div>

        <div id="{{$collapse}}" class="collapse" aria-labelledby="{{$header}}" data-parent="#{{$parent}}">
            <div class="card-body">
                {{$slot}}
            </div>
        </div>
</div>