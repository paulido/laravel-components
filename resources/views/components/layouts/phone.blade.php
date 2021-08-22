@extends('layouts.base')
@section('main')

    <style>
        html,body{
          max-width: 100%;
          min-width: 412px;
        }
        .row-header{
            border: none;
        }
    
        div[class*="col-"]
        {
          /* border: solid 0.5px; */
        }
        .row{
          padding-left: 10px;
        }


        .row-ms p, .row-ms h5{ 
            line-height: 19px;
        }

        .second-col > p{
            line-height: 15px;
        }
    
        .row:hover{
          background-color: rgb(240, 240, 240);
        }
    
        .mail-checkbox, .mail-star{
          display: inline-block;
        }
    
        .first-col{
          padding-left: 20px;
        }
    
        .chkd:hover{
            background-color: rgb(230, 227, 227);
        }
    
        .drpchk:hover{
          background-color: rgb(230, 227, 227);
        }
    
        .col-date{
          padding-left: 2px;
        }
    
        .row-ms{
          border: solid 0.4px rgb(235, 235, 235);
          padding-top: 0;
          padding-bottom: 0;
          border-left: none;
          border-right: none;
        }
    
        .row-ms:hover{
         
          box-shadow:  0 2px 50px 10px rgba(64,60,67,.16);
          
        }

        /* .form-inline{
            width: 500px;
        } */

        .search-icon{
            position: absolute;
            display: block;
            z-index: 2;
            padding-left: 20px;
        }


        input[name="txt-search"]{
            position: relative; 
            padding-left: 45px;
            padding-top: 5px;
            padding-bottom: 5px;
            box-shadow:  2px 1px 5px 4px rgba(64,60,67,.16);
            border-radius: 20px;
        }

        input[name="txt-search"]:hover{
            box-shadow:  2px 1px 5px 5px rgba(64,60,67,.16);
        }
        input[name="txt-search"]:active{
            border-color: #fff;
        }
        /* input[name="txt-search"]:focus{
            width: 100%;
        } */

        .row-ms{
            padding-top: 5px;
            padding-left: 10px;
            padding-right: 8px;
        }

        .navbar .form-inline{
            align-items: center;
            align-content: center;
        }

        .checkbox-all{
            position: relative;
            left: -10px;
        }

        .files, .reports{
            cursor: pointer;
        }

        @media(max-width: 768px){

            .fa-chart-pie{
                position: relative;
                left: -30px;
            }
        }

        .search-icon{
            top: 22px;
        }

        input[type="checkbox"]{
            cursor: pointer;
        }

        #user-dropdown li{
            background-color: none !important;
        }

        .user-img-txt{
            height: 30px;
            width: 30px;
            background-color: #336699;
            border-radius: 50%;
            display: inline-block;
            text-align: center;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            padding-top: 2px;
        }
        
        #dismiss{
            width: 100px;
        }

    </style>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <!-- <h3>{{config('app.name')}}</h3> -->
                <img src="{{asset('images/logo2.png')}}" alt="Mailer" width="100" height="100">
            </div>

            <ul class="list-unstyled components">
                <!-- <img src="{{asset('images/logo2.png')}}" alt="Mailer"> -->
                <!-- <p>{{auth()->user()->name}}</p> -->
                <!-- <li class="{{currentRoute(route('mail.dashboard'))}}">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">@lang('Dashboard')</a>
                </li> -->
                <li class="{{currentRoute(route('mail.sentbox'))}}">
                    <a href="{{route('mail.sentbox')}}"><i class="fas fa-envelope mr-2"></i>@lang('Sent')s</a>
                </li>
                <li class="{{currentRoute(route('mail.create'))}}">
                    <a href="{{route('mail.create')}}"><i class="fas fa-envelope mr-2"></i>@lang('New')</a>
                </li>
                <li class="{{currentRoute(route('mail.trash'))}}">
                    <a href="{{route('mail.trash')}}"><i class="fas fa-trash mr-2">&nbsp;</i>@lang('Trash')</a>
                </li>
                <li class="{{currentRoute(route('contact.create'))}}">
                    <a href="{{route('contact.create')}}"><i class="far fa-address-book mr-2"></i>@lang('New Contact')</a>
                </li>
                <li class="{{currentRoute(route('contact.index'))}}">
                        <a href="{{route('contact.index')}}"><i class="far fa-address-book mr-2"></i>@lang('Contacts List')</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn d-none d-md-inline">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="form-inline mx-auto">
                        <div class="form-group">
                            <span class="search-icon py-0" id="sidebarBars"><i class="fas fa-search d-none d-md-inline "></i><i class="fas fa-bars d-md-none " type="button" id="fa-bars"></i></span><input id="searchInput" type="text" name="txt-search" class="form-control" placeholder="Rechercher...">
                        </div>
                    </div>

                    <!-- <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button> -->

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active mr-5">
                                <!-- <a class="nav-link" href="#"><i class="fas fa-user-circle"></i></a> -->
                                <div class="dropdown d-inline dropleft">

                                

                                    <!-- <button type="button" class="btn" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                                        <!-- <img class="user-img type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="{{asset('images/user2-160x160.jpg')}}}" alt="User"/> -->
                                        @if(0)
                                         <img class="rounded-circle" alt="" src="images/admin.jpg" data-holder-rendered="true" width="30" height="30" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @else
                                          <p class="user-img-txt" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{first2chars(auth()->user()->name)}}</p>
                                        @endif
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="user-dropdown">
                                            <li class="dropdown-item text-muted">{{auth()->user()->name}}</li>
                                            <li class="dropdown-item pl-10">{{auth()->user()->email}}</li>
                                            <hr>
                                            <li class="dropdown-item"><a href="/user/profile">@lang('Profile')</a></li>
                                            <li class="dropdown-item"><a href="#" class="logout-link">@lang('Deconnecter')</a></li>
                                      </ul>
                                 </div>
                            </li>
                        </ul>
                    </div> 
                </div>
            </nav>
            <nav class="container">
                <div class="row d-none d-md-block mt-2 row-header">
                    <div class="col-12">
                       <div class="btn btn-chkd">
                           <input type="checkbox" class=" btn chkd  checkbox-all" onclick="checkCheboxes('.checkbox-all','.mail-checkbox');">
                           <div class="dropdown d-inline">
                               <button type="button" class="btn dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="filter">
                                    <a class="dropdown-item" href="#">@lang('All')</a>
                                    <a class="dropdown-item" href="#">@lang('Readed')</a>
                                    <a class="dropdown-item" href="#">@lang('Unreaded')</a>
                                  </div>
                           </div>
                           <!-- <span class="dropdown-toggle drpchk pl-2"></span> -->
                           <span class="pl-5 refresh"><i class="fas fa-sync-alt"></i></span>
                           <span class="pl-5 del-sent del-trash"><i class="fas fa-trash"></i></span>
                       </div>
                    </div>
                  </div>
            </nav>

            @if(Session::has('success'))
                    <x-alerts.dismiss type="success" texte="{{Session::get('success')}}"></x-alerts.dismiss>
            @elseif(Session::has('failure'))
                <x-alerts.dismiss type="danger" texte="{{Session::get('fulure')}}"></x-alerts.dismiss>
            @endif
            
            <hr>

            <div class="main container-fluid">
              @yield('content')
            </div>
    </div>


    <div class="overlay"></div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- Popper.JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> -->
    <!-- Bootstrap JS -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> -->
    <!-- jQuery Custom Scroller CDN -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script> -->

    @section('basescript')
    <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').removeClass('active');
                });

                $('#sidebarCollapse, #fa-bars').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').addClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>

    <script>
        $('#dismiss').on('click', function(){

            // $('#sidebar').toggleClass('active');
        });
    </script>

    <script>
        $(window).ready(function(){
            $('input[type="checkbox"]').prop('checked', false);
        })
    </script>


    <!-- handle attachment -->
    <script>
        $('.files').on('click', function(){
            alert('file');
        });
    </script>

    <!-- handle reports -->

    <script>
        $('.reports').on('click', function(){
            alert('report');
        });
    </script>
    
    <!-- handle message delete -->

    @yield('phonelayoutjs')
    
   @endsection
@endsection
