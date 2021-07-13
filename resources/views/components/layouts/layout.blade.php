<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

@env('production')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.3.1/tagify.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/basic.css" integrity="sha512-+Vla3mZvC+lQdBu1SKhXLCbzoNCl0hQ8GtCK8+4gOJS/PN9TTn0AO6SxlpX8p+5Zoumf1vXFyMlhpQtVD5+eSw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   @stack('production')
@endenv

@env('local')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/tagify.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    @stack('localcss')
@endenv

<!-- both local and production styles -->
@env(['local', 'production'])
   <link rel="stylesheet" href="{{asset('css/components.css')}}">
   @stack('bothcss')

@endenv

<title>{{$title ?? ''}}</title>

</head>

<body>

<x-sidebars.side-bar></x-sidebars.side-bar>
<x-navbars.navbar toggle="false">
    <x-navbars.nav>
        <li><x-menus.dropdown>
            <x-menus.dropdown-link></x-menus.dropdown-link>
            <x-menus.dropdown-link></x-menus.dropdown-link>
            <x-menus.dropdown-link></x-menus.dropdown-link>
            <x-menus.dropdown-item></x-menus.dropdown-item>
        </x-menus.dropdown>
    </li>
    </x-navbars.nav>
</x-navbars.navbar>

{{$slot}}    <!-- content -->

<!-- production js -->
@env('production')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{asset('js/layout.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.3.1/jQuery.tagify.min.js" integrity="sha512-YGNdO1x6peaA2qNN51qbj6YLikIE1BbUlzkxpYn4+y/iKCF4dQ3FauyWG3Y1amxYEoMx4W3KnSKpwMKk7vt1TQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js" integrity="sha512-VQQXLthlZQO00P+uEu4mJ4G4OAgqTtKG1hri56kQY1DtdLeIqhKUp9W/lllDDu3uN3SnUNawpW7lBda8+dSi7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @stack('productionjs')
@endenv


<!-- local js scripts -->
@env('local')
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/layout.js')}}"></script>
    <script src="{{asset('js/jQuery.tagify.min.js')}}"></script>
    <script src="{{asset('js/circliful.js')}}"></script>
    @stack('localjs')  
@endenv

<!-- both local and production scripts -->
@env(['local', 'production'])
    <script src="{{asset('js/layout.js')}}"></script>
    <script src="{{asset('js/ajaxrequests.js')}}"></script>
    <script src="{{asset('js/pekeUpload.js')}}"></script>
    <script src="{{asset('js/idojs.js')}}"></script>
     @stack('bothjs')
@endenv

</body>
</html>