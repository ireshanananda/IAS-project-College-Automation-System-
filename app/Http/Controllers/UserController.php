<?php

namespace App\Http\Controllers;
use App\Models\subject;
use App\Models\child_sub;
use App\Models\User;
use App\Models\stu_sub;
use Illuminate\Support\Facades\DB;
use Auth;
class UserController extends Controller
{
    public function enroll($id){
     $stu_sub=new stu_sub;
     $stu_sub->sub_id=$id;
     $stu_sub->stu_id=Auth::user()->id;
     $stu_sub->save();
     return redirect("/user");

    }

    public function denroll($id){
        $stu_sub=stu_sub::where('sub_id',$id);
        $stu_sub->delete();

        return redirect("/user");

       }
       public function Index(){


        $data = DB::table('subjects')->join('stu_subs', 'stu_subs.sub_id', '=', 'subjects.id')->where('stu_subs.stu_id', '=',  Auth::user()->id)->select('subjects.*')->get();

        return view('User.index')->with('subjects',$data);
       }
public function Subjects(){
    $data1 = DB::table('subjects')->join('stu_subs', 'stu_subs.sub_id', '=', 'subjects.id')->where('stu_subs.stu_id', '=',  Auth::user()->id)->select('subjects.*');
    $data=subject::union($data1)->get();

        return view('User.subjects')->with('subjects',$data);
}
public function SubjectView($id){
    $data=subject::where('id',$id)->get();
    $childSub=child_sub::where('sub_id',$id)->get();

    return view('User.subjectview')->with('subject',$data)->with('childsubs',$childSub);
}


}
