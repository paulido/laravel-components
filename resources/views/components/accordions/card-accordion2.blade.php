<script>
    $(document).ready(function(){
        // Add down arrow icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-angle-down").removeClass("fa-angle-right");
            $(this).css('color', 'read');
        });
        
        // Toggle right and down arrow icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-angle-right").addClass("fa-angle-down");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-angle-down").addClass("fa-angle-right");
        });
    });
</script>
<div class="card">
    <div class="card-header" id="{{$header}}">
        <h2 class="mb-0">
            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#{{$collapse}}"><i class="fa fa-angle-right"></i>{{$text}}</button>									
        </h2>
    </div>
    <div id="{{$collapse}}" {{ $attributes->merge(['class' => 'collapse']) }} aria-labelledby="{{$header}}" data-parent="#{{$parent}}">
        <div class="card-body">
            {{$slot}}
        </div>
    </div>
</div>