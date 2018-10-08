<?php

namespace App\Http\Controllers;

use App\addnews;
use App\bloodrequest;
use App\contactmessage;
use App\distric;
use App\group;
use App\subscribemanage;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    //

    public function add_district()
    {

        return view('admin.districadd');

    }

    public function district_add(Request $request)
    {

        $distrct=new distric();

        $distrct->district_name=$request->district_name;
        $distrct->district_description=$request->district_description;
        $distrct->publication_status=$request->publication_status;
        $distrct->save();
        return redirect('/add_district');


    }

    public function addbloodgroup()
    {

        return view('admin.addgroup');

    }

    public function grouptodatabse(Request $request)
    {






        $group=new group();
        $group->group_name=$request->group_name;
        $group->group_description=$request->group_description;
        $group->publication_status=$request->publication_status;
        $group->save();
        return redirect('/addblood_group');

    }


    public function shownewsadd()
    {
        return view('admin.viewaddnews');
    }







public function addnews(Request $request)
{


    $imageUrl = $this->newsImageUpload($request);

     $this->addnewsdetails($request,$imageUrl);

    return redirect('shownewsadd')->with('msg', ' Thank You ');
}

public function newsImageUpload($request)
{

    $newsImage = $request->file('image');
    $imageFileType = $newsImage ->getClientOriginalExtension();
    $imageName = $request->contact . '.' . $imageFileType;
    $directory = 'news_images/';
    $imageUrl = $directory . $imageName;

    $newsImage ->move($directory, $imageName);

    return $imageUrl;
}


public function addnewsdetails($request,$imageUrl)
{
    $addnews=new addnews();

    $addnews->headline=$request->headline;
    $addnews->discription=$request->discription;
    $addnews->contact=$request->contact;
    $addnews->area=$request->area;
    $addnews->avaliable_status=$request->avaliable_status;
    $addnews->image=$imageUrl;
    $addnews->save();



}

public function managenews()
{
    $managenews=addnews::all();

    return view('admin.managenews',
        ['managenews'=>$managenews]
        );

}

public function editnews($id)
{
    $editnews=addnews::find($id);

    return view('admin.editnews',
        ['editnews'=>$editnews]
        );


}


public function updatenews(Request $request)
{

    $updatenews=addnews::find($request->id);
    $updatenews->headline=$request->headline;
    $updatenews->discription=$request->discription;
    $updatenews->contact=$request->contact;
    $updatenews->area=$request->area;
    $updatenews->avaliable_status=$request->avaliable_status;

    $updatenews->save();

    return redirect('managenews')->with('msg','UPDATE');




}
public function deletenews($id)
{
    $deleteenews=addnews::find($id);
    $deleteenews->delete();

    return redirect('managenews')->with('msg','DELETE');

}

public function bloodrequest(Request $request)
{


    $bloodrequest=new bloodrequest();

    $bloodrequest->name=$request->name;
    $bloodrequest->blood_group=$request->blood_group;
    $bloodrequest->phone=$request->phone;
    $bloodrequest->message=$request->message;
    $bloodrequest->area=$request->area;
    $bloodrequest->save();

    return redirect('findhere')->with('msg','Thanks');
}

public function managerequest()
{
    $managerequest=bloodrequest::all();
    return view('admin.managerequest',
        ['managerequest'=>$managerequest]
        );

}


public function submitcontactmessage(Request $request)
{



    $contactmessage=new contactmessage();

    $contactmessage->name=$request->name;
    $contactmessage->email=$request->email;
    $contactmessage->message=$request->message;
    $contactmessage->save();
    return redirect('contact')->with('msg','Thanks');


}


public function viewmessage()
{
    $viewmessage=contactmessage::all();
    return view('admin.viewmessage',
        ['viewmessage'=>$viewmessage]


    );


}


public function subscribe()
{
    $mansgesubscribe=subscribemanage::all();
    return view('admin.managesubscribe',

        ['mansgesubscribe'=>$mansgesubscribe]
        );


}


public function savesubscribe(Request $request){


        $mansgesubscribe=new subscribemanage();
    $mansgesubscribe->email=$request->email;

    $mansgesubscribe->save();

    return redirect('/')->with('msg','Thanks');
    }


}
