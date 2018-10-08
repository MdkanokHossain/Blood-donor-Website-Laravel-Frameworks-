@extends('admin.master')

@section('title')
    Manage news
@endsection

@section('body')
    <br/>

    <div class=" panel panel-heading text-center text-uppercase font-weight-bold "
         style="font-family:cursive; background-color: darkorange; color: white">
        Manage News
    </div>

    <div class="row ">
        <div class="col-lg-12 ">

            <div class="panel panel-default ">
                <!-- /.panel-heading -->
                <div class="panel-body">

                    <h3 class="text-center text-danger" style="font-family: cursive">{{Session::get('msg')}}</h3>

                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                        <thead class="font-italic bg-primary">

                        <tr>
                            <th class="text-center">Sl No</th>
                            <th class="text-center">News Headline</th>
                            <th class="text-center">News Discription</th>
                            <th class="text-center">Contact Number</th>
                            <th class="text-center">Area</th>
                            <th class="text-center">News Image</th>
                            <th class="text-center">Published Status</th>
                            <th class="text-center">Action</th>
                        </tr>

                        </thead>

                        <tbody class=" text-center " style="font-family: cursive">


                        @foreach($managenews as $managenews)
                        @php($i=1)



                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{$managenews->headline}}</td>
                                <td>{{$managenews->discription}}</td>
                                <td>{{$managenews->contact}}</td>
                                <td>{{$managenews->area}}</td>
                                <td> <img src="{{asset( $managenews->image)}}" height="70" width="70" alt="dddd"></td>
                                <td>{{$managenews->avaliable_status}}</td>
                                <td>
                                    <a href="{{route('editnews',['id'=>$managenews->id])}}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('deletenews',['id'=>$managenews->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Are sure delete this ??? ')">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>

                         @endforeach

                        </tbody>


                    </table>


                </div>
                <!-- /.table-responsive -->

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
    </div>


@endsection