<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 17-09-18
 * Time: 14.19
 */
?>


@include('admin.include.header')

<body>



<div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('/')}}admin/assets/img/logo.jpg" height="40" width="40" />
                    {{ Auth::user()->name }}
                </a>

            </div>




            <form  id="logout-form" action="{{ route('logout') }}" method="POST" >
                @csrf
                <span class="logout-spn" >
                  <button href="" style="color:#fff; font-family: cursive">LOGOUT</button>

                </span>
            </form>


        </div>
    </div>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">



                <li class="active-link">
                    <a href="{{route('home')}}" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">********</span></a>


                </li>


                <li>
                    <a style="font-family: cursive" href=""><i class="fa fa-table "></i>District Management  <span class="badge"></span></a>

                    <ul  >
                        <li >
                            <a style="font-family: cursive" href="{{route('add_district')}}" >ADD DISTRICT</a>
                        </li>
                        {{--<li>--}}
                            {{--<a style="font-family: cursive" href="">MANAGE DISTRICT</a>--}}
                        {{--</li>--}}
                    </ul>
                </li>
                <li>
                    <a style="font-family: cursive" href=""><i class="fa fa-edit "></i>Blood Group management  <span class="badge"></span></a>
                    <ul  >
                        <li >
                            <a style="font-family: cursive" href="{{route('addblood_group')}}" >ADD GROUP</a>
                        </li>
                        {{--<li>--}}
                            {{--<a style="font-family: cursive" href="#">MANAGE GROUP</a>--}}
                        {{--</li>--}}
                    </ul>



                </li>


                <li>
                    <a style="font-family: cursive" href=""><i class="fa fa-edit "></i>News Management  <span class="badge"></span></a>
                    <ul  >
                        <li >
                            <a style="font-family: cursive" href="{{route('shownewsadd')}}" >ADD NEWS</a>
                        </li>
                        <li>
                            <a style="font-family: cursive" href="{{route('managenews')}}" class="fa fa-battery-three-quarters">MANAGE NEWS</a>
                        </li>
                    </ul>



                </li>


                <li>
                    <a style="font-family: cursive" href="{{route('managerequest')}}"><i class="fa fa-qrcode "></i>Manage Request</a>
                </li>


                <li>
                    <a style="font-family: cursive" href="{{route('viewmessage')}}"><i class="fa fa-qrcode "></i>Manage Message</a>
                </li>


                <li>
                    <a style="font-family: cursive" href="{{route('subscribe')}}"><i class="fa fa-qrcode "></i>Manage Subscribe</a>
                </li>

            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
    <div id="page-inner">

@yield('body')

</div>
    </div>


<!-- /. PAGE WRAPPER  -->
</div>
@include('admin.include.footer')