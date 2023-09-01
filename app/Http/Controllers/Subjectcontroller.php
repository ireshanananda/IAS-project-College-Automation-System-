<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\child_sub;
class Subjectcontroller extends Controller
{

    public function addChildSubject(Request $request){


        $this->validate($request,[
            'name' =>'required|min:2',
            'description' =>'required|min:2',





        ]);

$subject= new child_sub;
$subject->sub_id=$request->id;
$subject->name=$request->name;
$subject->description=$request->description;
$subject->save();
return redirect()->back()->with('alert','Sucessfully added');



    }






    public function addSubject(Request $request){

        $this->validate($request,[
            'name' =>'required|min:2',
            'description' =>'required|min:2',





        ]);
$subject= new subject;

$subject->name=$request->name;
$subject->descreption=$request->description;
$subject->save();
return redirect()->back()->with('alert','Sucessfully added');



    }


}
