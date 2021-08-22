<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" href="{{asset('icons/icon.ico')}}">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

@env('production')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.3.1/tagify.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/basic.css" integrity="sha512-+Vla3mZvC+lQdBu1SKhXLCbzoNCl0hQ8GtCK8+4gOJS/PN9TTn0AO6SxlpX8p+5Zoumf1vXFyMlhpQtVD5+eSw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endenv

@env('local')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/mCustomScrollbar.css')}}">
<link rel="stylesheet" href="{{asset('css/tagify.css')}}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
@endenv

<!-- both local and production styles -->
@env(['local', 'production'])

<link rel="stylesheet" href="{{asset('css/components.css')}}">
<link rel="stylesheet" href="{{asset('css/itheme1.css')}}">
<link rel="stylesheet" href="{{asset('css/idocss.css')}}">
@endenv

@yield('basecss')

@section('title')
<title>Mailer</title>
@show
</head>

<body>


@yield('main')  


<form method="POST" action="{{route('logout')}}" id="logout-form">
    @csrf
</form>
<!-- production js -->
@env('production')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.3.1/jQuery.tagify.min.js" integrity="sha512-YGNdO1x6peaA2qNN51qbj6YLikIE1BbUlzkxpYn4+y/iKCF4dQ3FauyWG3Y1amxYEoMx4W3KnSKpwMKk7vt1TQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js" integrity="sha512-VQQXLthlZQO00P+uEu4mJ4G4OAgqTtKG1hri56kQY1DtdLeIqhKUp9W/lllDDu3uN3SnUNawpW7lBda8+dSi7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endenv


<!-- local js scripts -->
@env('local')
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jQuery.tagify.min.js')}}"></script>
<script src="{{asset('js/circliful.js')}}"></script>
@endenv

<!-- both local and production scripts -->
@env(['local', 'production'])
<script src="{{asset('js/idojs.js')}}"></script>
<script src="{{asset('js/pekeUpload.js')}}"></script>
<script src="{{asset('js/components.js')}}"></script>
<script src="{{asset('js/idojs.js')}}"></script>
@endenv

@yield('basescript')

<script type="text/javascript">
$(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });
    
    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });
    
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});
</script>

<script>
circliful.newCircle({
    percent: $('#circle').attr('data'),
    id: 'circle',
    type: 'simple',
    backgroundBorderWidth: 3,
    foregroundBorderWidth: 6,
    backgroundCircleWidth: 3,
    foregroundCircleWidth: 6,
});
</script>

<script>
(function(){

    var circle1 = circliful.newCircle({
    percent: $('#circle').attr('data'),
    id: 'circle',
    type: 'simple',
    backgroundBorderWidth: 3,
    foregroundBorderWidth: 2,
    backgroundCircleWidth: 2,
    foregroundCircleWidth: 3,

});

// report


}());

</script>

<script>
$('.logout-link').on('click', function(){
    $('#logout-form').submit();
})
</script>

<!-- handle refresh -->
<script>
    $('.refresh').on('click', function(){
        location.reload();
    });
</script>

<script>
   $(document).ready(function(){
      $("#searchInput").on("keyup", function() {
         var value = $(this).val().toLowerCase();
         $(".row-ms").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
         });
      });
   });
</script>

<script>
    function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
} 
</script>


</body>
</html>