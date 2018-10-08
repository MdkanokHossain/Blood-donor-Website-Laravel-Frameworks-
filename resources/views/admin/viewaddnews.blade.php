<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 26-09-18
 * Time: 04.33
 */
?>


@extends('admin.master')


@section('title')
    postnews
 @endsection


@section('body')






    <div class="row">

        <div class="col-md-10 col-md-offset-1 ">
            <div class="panel-heading text-center font-weight-bold"
                 style="font-family:cursive; text-transform:uppercase; background-color:orange;color: white ">
               Add News
            </div>

            <div class="panel" style="margin-top: 20px;">
                <div class="panel panel-default">

                    <div class="panel-body">

                        <h2 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h2>


                        <form action="{{route('addnews')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            @csrf





                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px"> News Headline</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="text" name="headline" class="form-control">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 40px">News Discription </label>
                                <div class="col-md-9 " style="margin-top: 20px">
                                    <textarea  name=" discription" class="form-control" id="editor" rows="3"
                                               style="resize: vertical"></textarea>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px">Contact Number</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="text" name="contact" class="form-control">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px">Area </label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="text" name="area" class="form-control">
                                </div>

                            </div>












                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px"> News Image </label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="file" name="image" accept="image/*">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 " style="margin-top: 10px"> Published Status?</label>
                                <div class="col-md-9 " style="margin-top: 10px">
                                    <input type="radio" name="avaliable_status" value="1">Yes
                                    <input type="radio" name="avaliable_status" value="0">No
                                </div>

                            </div>


                            <div class="form-group">

                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" name="btn" class="btn btn-block btn-primary "
                                           value="Post News">

                                </div>

                            </div>

                        </form>

                    </div>


                </div>

            </div>
        </div>

    </div>




@endsection