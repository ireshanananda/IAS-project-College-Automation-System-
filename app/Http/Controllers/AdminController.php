<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\child_sub;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    //Add Child subjetc
    public function addresource(Request $request){


        $this->validate($request,[
            'name' =>'required|min:2',
            'description' =>'required|min:2',
            'link'=>'required',
            'type'=>'required'






        ]);

$subject= new child_sub;
$subject->sub_id=$request->id;
$subject->name=$request->name;
$subject->description=$request->description;
$subject->link=$request->link;
$subject->type=$request->type;
$subject->save();
return redirect()->back()->with('alert','Sucessfully added');



    }



//add subject


    public function addSubject(Request $request){

        $this->validate($request,[
            'id'=>'required',
            'name' =>'required|min:2',
            'description' =>'required|min:2',





        ]);
if(subject::where('id',$request->id)->exists()){
    return back()->with('alert', 'exist');
}
$subject= new subject;
$subject->id=$request->id;
$subject->year=$request->year;
$subject->semester=$request->semester;
$subject->name=$request->name;
$subject->descreption=$request->description;
$subject->save();
return redirect()->back()->with('alert','Sucessfully added');



    }


public function subjectView($id){
    $data=subject::where('id',$id)->get();
    $note=child_sub::where('sub_id',$id)->where('type','note')->get();
    $video=child_sub::where('sub_id',$id)->where('type','video')->get();
    $link=child_sub::where('sub_id',$id)->where('type','link')->get();
    $kuppi=child_sub::where('sub_id',$id)->where('type','kuppi')->get();
    $other=child_sub::where('sub_id',$id)->where('type','other')->get();
    $childSub=['note'=>$note,
'video'=>$video,
'link'=>$link,
'kuppi'=>$kuppi,
'other'=>$other
];

    return view('Admin.subjectView')->with('subject',$data)->with('childsubs',$childSub);

}


public function subjectDelete($id){
    $data=subject::where('id',$id);
    $data->delete();
return redirect()-> back();
}

public function childSubjectDelete($id){
    $data=child_sub::where('id',$id);
    $data->delete();
return redirect()-> back();

}

public function profileView($id){
    $user=User::where('id',$id)->get();

    $data = DB::table('subjects')->join('stu_subs', 'stu_subs.sub_id', '=', 'subjects.id')->where('stu_subs.stu_id', '=', $id)->select('subjects.*')->get();


        return view('Admin.viewprofile')->with('subjects',$data)->with('user',$user[0]);
}

public function profileDelete($id){
    $user=User::where('id',$id)->firstorfail()->delete();



    $data=User::where('role','!=','1')->get();
    return view('Admin.Users')->with('users',$data);
}




public function Users(){
$data=User::where('role','!=','1')->get();
    return view('Admin.Users')->with('users',$data);
}

public function Subjects(){
    $data=subject::all();
// return $data;
     return view('Admin.Subjects')->with('subjects',$data);
    }

public function editSubject($id){
    $data=subject::where('id',$id)->get();
    return view('Admin.EditSubject')->with('subject',$data[0]);

}

public function updateSubject(Request $request){
    $subject=subject::where('id',$request->id) ->limit(1)->update([
        'name'=>$request->name,
        'descreption'=>$request->descreption,

    ]
    );


    return redirect('admin/subject');
}

}
