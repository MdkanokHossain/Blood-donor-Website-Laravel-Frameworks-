@extends('front.home.home')


@section('title')

    find district donor
@endsection





@section('body')



        <h1></h1>





        <table class="table">
            <thead>
            <tr class="success">
                <th>***</th>
                <th>Donor Name</th>
                <th>Donor Picture</th>
                <th>Father Name</th>
                <th>Donor Mobile Number</th>
                <th>Donor Email Address</th>
                <th>Donor Aviliable Area</th>
                <th>Gender</th>
                <th>Availiablity</th>


            </tr>
            </thead>
            <tbody>

            @foreach($donorbycategory as $donorbycategory)
            <tr class="danger">
                <td>***</td>
                <td>{{$donorbycategory->donor_name}}</td>
                <td><img src="{{asset($donorbycategory->image)}}" alt="" height="50" width="50"></td>
                <td>{{$donorbycategory->father_name}}</td>
                <td>{{$donorbycategory->donor_mobile}}</td>
                <td>{{$donorbycategory->donor_email}}</td>
                <td>{{$donorbycategory->donor_current_address}}</td>
                <td>{{$donorbycategory->gender}}</td>
                <td>{{$donorbycategory->avaliable_status}}</td>



                @endforeach
            </tr>
            </tbody>
        </table>








@endsection