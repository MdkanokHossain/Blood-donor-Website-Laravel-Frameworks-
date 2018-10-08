<?php

namespace App\Http\Controllers;

use App\addnews;
use App\distric;
use App\group;
use App\joinhere;
use Illuminate\Http\Request;

class frontcontroller extends Controller
{
    //


    public function index()
    {
        $viewnews=addnews::where('avaliable_status',1)->take(4)->get();
return view('front.home.homepage',
    ['viewnews'=>$viewnews]
    );



    }


public function joinhere()
{

    $district=distric::where('publication_status', 1)->get();
    $group=group::where('publication_status', 1)->get();
    return view('front.home.joinhere',

        ['district'=>$district],

        ['group'=>$group]

        );

}

public function savedonor($request, $imageUrl)
{

    $adddonor=new joinhere();

    $adddonor->district_id=$request->district_id;
    $adddonor->group_id=$request->group_id;
    $adddonor->donor_name=$request->donor_name;
    $adddonor->father_name=$request->father_name;
    $adddonor->donor_mobile=$request->donor_mobile;
    $adddonor->donor_email=$request->donor_email;
    $adddonor->district_id=$request->district_id;
    $adddonor->donor_permanent_address=$request->donor_permanent_address;
    $adddonor->donor_current_address=$request->donor_current_address;
    $adddonor->gender=$request->gender;
    $adddonor->avaliable_status=$request->avaliable_status;
    $adddonor->image= $imageUrl;
    $adddonor->save();



}
    protected function donorImageUpload($request)
    {
        $donorImage = $request->file('image');
        $imageFileType = $donorImage->getClientOriginalExtension();
        $imageName = $request->donor_name . '.' . $imageFileType;
        $directory = 'donor_images/';
        $imageUrl = $directory . $imageName;

        $donorImage->move($directory, $imageName);

        return $imageUrl;
    }


    public function joindonor(Request $request)
    {

        $imageUrl = $this->donorImageUpload($request);

        $this->savedonor($request, $imageUrl);

        return redirect('joinhere')->with('msg', ' Thank You ');

    }



    public function findhere()

    {
        $findgroup=group::where('publication_status', 1)->get();

        $districtfind=distric::where('publication_status', 1) ->take(30)->get();

        $districtfindtwo=distric::where('publication_status', 1)->skip(30)->take(30)->get();

        return view('front.findhere',

//            ['findgroup'=>$findgroup],
            ['districtfind'=>$districtfind],
            ['districtfindtwo'=>$districtfindtwo]







        );

    }

    public function districtselect($id)
    {

$donorbycategory=joinhere::where('district_id',$id)->get();
return view('front.home.showdonor',

    ['donorbycategory'=>$donorbycategory]


);


    }



    public function news()
    {

        $viewnews=addnews::where('avaliable_status',1)->get();

        return view('front.news',
            ['viewnews'=>$viewnews]
        );

    }


    public function whocangiveblood()
    {

        return view('front.pages.whocangiveblood');

    }


    public function whydonateblood()
    {

        return view('front.pages.whydonateblood');

    }
    public function tipsfordonation()
    {

        return view('front.pages.tipsfordonation');

    }


    public function afterdonation()
    {

        return view('front.pages.afterdonation');

    }
    public function getinvolved()
    {

        return view('front.pages.getinvolved');

    }
    public function contact()
    {

        return view('front.contact');

    }


    public function typesofblooddonations()
    {

        return view('front.pages.typesofblooddonations');

    }



}
