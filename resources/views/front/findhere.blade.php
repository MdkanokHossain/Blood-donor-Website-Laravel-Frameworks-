<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 24-09-18
 * Time: 13.42
 */

?>




@extends('front.home.home')
@section('title')

    find here


@endsection

@section('body')


    <body>

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






        {{--<div class="row">--}}
            {{--@foreach($findgroup as $findgroup)--}}
            {{--<div class="list-group col-md-1.5">--}}


                    {{--<a style="background: yellow " href="" class="list-group-item list-group-item-action">{{$findgroup->group_description}}  </a>--}}

            {{--</div>--}}
            {{--@endforeach--}}
            {{--</div>--}}








    <div class="container">
       <div class="row">
        <div class="list-group col-md-4">

            @foreach($districtfind as $districtfind)
            <a style="background: yellow " href="{{route('districtselect',['id'=>$districtfind->id])}}" class="list-group-item list-group-item-action">{{$districtfind->district_name}} ** </a>
           @endforeach
        </div>




           <div class="list-group col-md-4">

               @foreach($districtfindtwo as $districtfindtwo)
                   <a style="background: yellow " href="{{route('districtselect',['id'=>$districtfind->id])}}" class="list-group-item list-group-item-action">{{$districtfindtwo->district_name}} ** </a>

               @endforeach
           </div>
           <div class="list-group col-md-4">

               <div class="container">
                   <div class="row">
                       <div class="col-md-4">
                           <div class="well well-sm">
                               <form class="form-horizontal" action="{{route('bloodrequest')}}" method="post" >
                                  @csrf

                                   <fieldset>
                                       <legend class="text-center header">SUBMIT BLOOD REQUEST</legend>
                                       <h2 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h2>

                                       <div class="form-group">
                                           <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                           <div class="col-md-8">
                                               <input id="fname" name="name" type="text" placeholder="Name" class="form-control">
                                           </div>
                                       </div>


                                       <div class="form-group">
                                           <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                           <div class="col-md-8">
                                               <input id="email" name="blood_group" type="text" placeholder="Give Blood Group" class="form-control">
                                           </div>
                                       </div>

                                       <div class="form-group">
                                           <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                           <div class="col-md-8">
                                               <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                                           </div>
                                       </div>

                                       <div class="form-group">
                                           <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                           <div class="col-md-8">
                                               <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you soon." rows="7"></textarea>
                                           </div>
                                       </div>


                                       <div class="form-group">
                                           <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                           <div class="col-md-8">
                                               <textarea class="form-control" id="message" name="area" placeholder="Enter your Area" rows="7"></textarea>
                                           </div>
                                       </div>

                                       <div class="form-group">
                                           <div class="col-md-12 text-center">
                                               <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                           </div>
                                       </div>
                                   </fieldset>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>





           </div>














    </div>
    </div>
    </body>




@endsection