<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 26-09-18
 * Time: 01.17
 */
?>


@extends('front.home.home')


@section('title')
    NEWS
 @endsection


@section('body')
    <div class="col-md=12">

        <div class="row">

            <h5 class="fa-youtube col-md-2" style="font-family: cursive;text-align: center"> Browse donors</h5>
            <h5 class="fa-youtube col-md-2" style="font-family: cursive;text-align: center">  Manage donation record
            </h5>
            <h5 class="fa-youtube col-md-2" style="font-family: cursive;text-align: center">  Save donor's contacts
            </h5>
            <h5 class="fa-youtube col-md-2" style="font-family: cursive;text-align: center">  Help others
            </h5>
            <h5 class="fa-youtube col-md-2" style="font-family: cursive;text-align: center">   Become a hero

            </h5><h5 class="fa-youtube col-md-2" style="font-family: cursive;text-align: center">    Be social


            </h5>

        </div>

    </div>


    <hr/>





    <div class="col-md-12">
      <div class="row">


          @foreach($viewnews as $viewnews)
    <div class="col-sm-3">
        <img src="{{asset( $viewnews->image)}}" height="180" width="270" alt="dddd">
        <h4 class="pt-20" style="font-family: cursive"><a href="#"><b>News Headline: {{$viewnews->headline}}<br/>Area: {{$viewnews->area}}</b></a></h4>
        <ul class="list-li-mr-20 pt-10 pb-20">
            <li class="color-lite-black" style="font-family: cursive">by <a href="#" class="color-black"><b>{{$viewnews->contact}}</b></a>
                {{$viewnews->created_at}}</li>
            <li style="font-family: cursive;color: #0000bf"><i class="color-primary mr-5 font-12 glyphicon-check"></i><b>30,190</b></li>


        </ul>
    </div>

              @endforeach


    </div>
    </div>
@endsection

