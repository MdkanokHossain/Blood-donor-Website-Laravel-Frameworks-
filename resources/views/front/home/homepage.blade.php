<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 17-09-18
 * Time: 13.31
 */
?>


@extends('front.home.home')


@section('title')

    blood home

@endsection



@section('body')







<div class="container">
    <div class="row">
        <div class="col-sm-12">



            <div class="col-sm-2">
                <div class="card">

                    <a href="{{route('whocangiveblood')}}" class="btn btn-primary" style="font-family: cursive">
                        Who can give blood?</a>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="card">


                    <a href="{{route('typesofblooddonations')}}" class="btn btn-primary" style="font-family: cursive">
                        Types of donations?</a>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="card">

                    <a href="{{route('whydonateblood')}}" class="btn btn-primary" style="font-family: cursive">
                        Why Donate Blood?</a>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="card">

                    <a href="{{route('tipsfordonation')}}" class="btn btn-primary" style="font-family: cursive">
                        Tips for a Donation</a>
                </div>
            </div>




            <div class="col-sm-2">
                <div class="card">

                    <a href="{{route('getinvolved')}}" class="btn btn-primary" style="font-family: cursive">
                        Get Involved</a>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="card">

                    <a href="{{route('afterdonation')}}" class="btn btn-primary" style="font-family: cursive">
                        Happens after Donate?</a>
                </div>
            </div>

    </div>
    </div>
    </div>







<hr/>




    <!-- END MENU -->

    <!-- Start slider -->
    <section id="" class="container-fluid">
        <div class="main-slider ">
            <div class="single-slide container">
                <img src="{{asset('/')}}frontstyle/assets/images/slider-4.jpg"  alt="img">
                <div class="slide-content container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="slide-article">
                                    <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Who can give blood?</h1>
                                    <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">Most people can give blood. You can give blood if you:

                                        are fit and healthy
                                        weigh between 7 stone 12 lbs and 25 stone, or 50kg and 160kg
                                        & are aged between 17 and 66 (or 70 if you have given blood before)
                                        are over 70 and have given blood in the last two years.</p>
                                    <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="{{route('whocangiveblood')}}">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="slider-img wow fadeInUp">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide container">
                <img src="{{asset('/')}}frontstyle/assets/images/slider-2.jpg" alt="img">
                <div class="slide-content container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="slide-article">
                                    <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">The need for blood</h1>
                                    <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">We need to make sure that we have enough supplies of all blood groups and blood types to treat all types of conditions.

                                        By giving blood, every donor helps us meet the challenge of providing life-saving products whenever and wherever they are needed.</p>
                                    <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="{{route('whydonateblood')}}">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="slider-img wow fadeInUp">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<section id="">
    <div class="container-fluid">
        <div class="title-area">
            <h2 class="title ">News and statements </h2>
            <span class="line"></span>
            <p style="background:#8b1481; font-family: cursive; color: yellow ">Your blood saves lives. Your blood donation is an amazing gift to people who need it in an emergency or for on-going medical treatment. </p>
        </div>
        <div class="col-md-12">
            <div class="row">


                @foreach($viewnews as $viewnews)

                    <div class="col-sm-3">


                        <img src="{{asset( $viewnews->image)}}" height="150" width="270" alt="dddd">
                        <h4 class="pt-20"><a href="#" style="font-family: cursive"><b>News Headline: {{$viewnews->headline}}<br/>Area: {{$viewnews->area}}</b></a></h4>
                        <ul class="list-li-mr-20 pt-10 pb-20">
                            <li class="color-lite-black " style="font-family: cursive">by <a href="#" class="color-black"><b>{{$viewnews->contact}}</b></a>
                                {{$viewnews->created_at}}</li>
                            <li style="font-family: cursive"><i class="color-primary mr-5 font-12 glyphicon-check"></i><b>30,190</b></li>


                        </ul>
                    </div>


                @endforeach


            </div>
        </div>


    </div>

</section>












<hr/>













    <!-- End slider -->

    <!-- Start Feature -->














    <!-- Start subscribe us -->
<section id="" style="background: black">
    <div class="subscribe-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="subscribe-area">
                        <a class="wow fadeInUp" style="color: yellow; font-family: cursive">Are you ready to save a life?
                            You can be one of registered donors on Bachbeasobai
                            bachbeasobai.com a non-profit, non-commercial interface was born out of our social commitment and our desire to use the power of the Internet to help common people. </a>

                       <hr/>

                            <a href="{{route('joinhere')}}" style="color: #3a158b;  font-family: cursive" type="submit">Join The Blood Donor Team</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</hr>















    <section id="subscribe">
        <div class="subscribe-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="subscribe-area">
                            <h3 class="wow fadeInUp" style="color: yellow; font-family: cursive">Subscribe To our Newsletter</h3>
                            <form method="post" action="{{route('savesubscribe')}}" class="subscrib-form wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">

                               @csrf
                                <input type="text" name="email" style="font-family: cursive" placeholder="Enter Your E-mail..">
                                <button class="subscribe-btn" style="color: yellow; font-family: cursive" type="submit">Submit</button>
                            </form>

                            <h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End subscribe us -->
<hr/>


@endsection
