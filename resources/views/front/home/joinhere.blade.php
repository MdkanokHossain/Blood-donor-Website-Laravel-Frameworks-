<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 21-09-18
 * Time: 19.11
 */
?>
@extends('front.home.home')

@section('title')

    join here
@endsection
@section('body')

    <br/>

    <div class="row">

        <div class="col-md-10 col-md-offset-1 ">
            <div class="panel-heading text-center font-weight-bold"
                 style="font-family:cursive; text-transform:uppercase; background-color:orange;color: white ">
                Register Yourself as a Donor
            </div>

            <div class="panel" style="margin-top: 20px;">
                <div class="panel panel-default">

                    <div class="panel-body">

                        <h2 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h2>


                        <form action="{{route('joindonor')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">

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





                                <label class="col-md-3 " style="margin-top: 10px; font-family: cursive;"> Chose District Name</label>
                                <div class="col-md-3 " style="margin-top: 10px">
                                    <select name="district_id" class="form-control">

                                        <option style="font-family: cursive">Select District Name</option>

                                        @foreach($district as $district)

                                            <option value="{{$district->id}}"> {{$district->district_name}} </option>


                                            @endforeach

                                    </select>
                                </div>




                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px;font-family: cursive"> Choose Blood Group</label>
                                <div class="col-md-3 " style="margin-top: 10px">
                                    <select name="group_id" class="form-control">
                                        <option style="font-family: cursive">Select Blood Group</option>
@foreach($group  as $group)
                                            <option value="{{$group->id}}" >{{$group->group_name}} </option>
    @endforeach

                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px;font-family: cursive"> Donor Name</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="text" name="donor_name" class="form-control">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px;font-family: cursive">Donor Father Name</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="text" name="father_name" class="form-control">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px;font-family: cursive"> Donor Mobile Number</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="text" name="donor_mobile" class="form-control">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px;font-family: cursive">Donor Email Address </label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="text" name="donor_email" class="form-control">
                                </div>

                            </div>


                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 40px;font-family: cursive">Donor Age </label>
                                <div class="col-md-3 " style="margin-top: 20px">
                                    <input type="number" name=" donor_permanent_address" class="form-control" rows="3"
                                              style="resize: vertical"></input>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 40px;font-family: cursive">Donor Aviliable Area </label>
                                <div class="col-md-9 " style="margin-top: 20px">
                                    <textarea  name=" donor_current_address" class="form-control" id="editor" rows="3"
                                              style="resize: vertical"></textarea>
                                </div>

                            </div>



                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px;font-family: cursive"> Choose Gender</label>
                                <div class="col-md-3 " style="margin-top: 10px">
                                    <select name="gender" class="form-control">
                                        <option>Select Gender</option>

                                        <option value="Male">Male </option>
                                        <option value="FeMale">FeMale </option>

                                    </select>
                                </div>

                            </div>





                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px;font-family: cursive"> Donor Image </label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="file" name="image" accept="image/*">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px;font-family: cursive"> Are you avaliable now?</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input style="font-family: cursive" type="radio" name="avaliable_status" value="YES">Yes
                                    <input style="font-family: cursive" type="radio" name="avaliable_status" value="NO">No
                                </div>

                            </div>


                            <div class="form-group">

                                <div class="col-md-9 col-md-offset-3">
                                    <input style="font-family: cursive" type="submit" name="btn" class="btn btn-block btn-primary "
                                           value="Save Yourself">

                                </div>

                            </div>

                        </form>

                    </div>


                </div>

            </div>
        </div>

    </div>

@endsection




