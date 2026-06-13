<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model Name
use App\Models\event;
use  App\Models\sport;
use App\Models\academic;
use App\Models\exam;
use App\Models\signup;
use App\Models\login;
use App\Models\adminsignup;
use App\Models\adminlogin;

class UserCenter extends Controller
{


  function eventadd(Request $r)
  {
      $r->validate([
          'en'=>'required',
        
          'name'=>'required|min:1|unique:event,name',
          'ern'=>'required|min:10|unique:event,en',
          'semname'=>'required|between:1,6',
          'div'=>'required',
          'tc'=>'required'
          
          ]);

      $event=new event();
      $event->eventname=$r->en;
      $event->name=$r->name;
      $event->en=$r->ern;
      $event->semname=$r->semname;
      $event->division=$r->div;
      $event->complaintdetails=$r->tc;
      $event->save();
      if($event)
        {
          return redirect()->back()->with(['sucess'=>'Sucess!']);
        }
      else{
        return redirect()->back()->with(['Error'=>'Data is not insert']);
      }


} 
  
  
  function sportadd(Request $r)
  {
     $r->validate([
          'en'=>'required',
          // table and table column name
          'name'=>'required|min:1|unique:sport,name',
          'ern'=>'required|min:10|unique:sport,en',
          'semname'=>'required|between:1,6',
          'div'=>'required',
          'tc'=>'required'
          
          ]);

      $sport=new sport();
      $sport->sportname=$r->en;
      $sport->name=$r->name;
      $sport->en=$r->ern;
      $sport->semname=$r->semname;
      $sport->division=$r->div;
      $sport->complaintdetails=$r->tc;
      $sport->save();
      if($sport)
        {
         return redirect()->back()->with(['sucess'=>'Sucess!']);
        }
      else{
        // echo "Data is not insert";
        return redirect()->back()->with(['Error','Data is not insert']);
      }
          // return $r->input();

  }
  function academicadd(Request $r)
  {
     $r->validate([
          'en'=>'required',
          // table and table column name
          'name'=>'required|min:1|unique:academic,name',
          'ern'=>'required|min:10|unique:academic,en',
          'semname'=>'required|between:1,6',
          'div'=>'required',
          'tc'=>'required'
          
          ]);

      $academic=new academic();
      $academic->academicname=$r->en;
      $academic->name=$r->name;
      $academic->en=$r->ern;
      $academic->semname=$r->semname;
      $academic->division=$r->div;
      $academic->complaintdetails=$r->tc;
      $academic->save();
      if($academic)
        {
         return redirect()->back()->with(['sucess'=>'Sucess!']);
        }
      else{
        // echo "Data is not insert";
        return redirect()->back()->with(['Error','Data is not insert']);
      }
  }
  function examadd(Request $r)
  {
     $r->validate([
          'en'=>'required',
          // table and table column name
          'name'=>'required|min:1|unique:exam,name',
          'ern'=>'required|min:10|unique:exam,en',
          'semname'=>'required|between:1,6',
          'div'=>'required',
          'tc'=>'required'
          
          ]);

      $exam=new exam();
      $exam->examname=$r->en;
      $exam->name=$r->name;
      $exam->en=$r->ern;
      $exam->semname=$r->semname;
      $exam->division=$r->div;
      $exam->complaintdetails=$r->tc;
      $exam->save();
      if($exam)
        {
        return redirect()->back()->with(['sucess'=>'Sucess!']);
        }
      else{
        // echo "Data is not insert";
        return redirect()->back()->with(['Error','Data is not insert']);
      }
  }


  function showEvent(Request $r)
  {
    $event=event::all();
    return view('vevent',['data'=>$event]);
  }

 function showaevent(Request $r)
 {
  $event=event::all();
  return view('avevent',['data'=>$event]);
 }
 function showasport(Request $r)
 {
  $sport=sport::all();
  return view('avsport',['data'=>$sport]);
 }
 function showaacademic(Request $r)
 {
  $academic=academic::all();
  return view('avacademic',['data'=>$academic]);
 }
 function showaexam(Request $r)
 {
  $exam=exam::all();
  return view('avexam',['data'=>$exam]);
 }


function asearch(Request $r)
{
  $event=event::where('name','like',"%$r->name%")->get();
  return view('avevent',['data'=>$event]);
}

function asport(Request $r)
{
  $sport=sport::where('name','like',"%$r->name%")->get();
   return view('avsport',['data'=>$sport]);
}

function aaa(Request $r){
  $academic=academic::where('name','like',"%$r->name%")->get();
  return view('avacademic',['data'=>$academic]);
}
function aexam(Request $r)
{
  $exam=exam::where('name','like',"%$r->name%")->get();
  return view('avexam',['data'=>$exam]);
}


   function showSport(Request $r)
  {
    $sport=sport::all();
    return view('vsport',['data'=> $sport]);
  }

  function showAcademic(Request $r)
  {
    $academic=academic::all();
    return view('vacademic',['data'=> $academic]);
  }
  
  function showExam(Request $r)
  {
    $exam=exam::all();
    return view('vexam',['data'=> $exam]);
  }

  function search(Request $r)
{
  // return $r->name;
  $event=event::where('name','like',"%$r->name%")->get();
   return view('vevent',['data'=>$event]);
}
  function searchsport(Request $r)
{
  // return $r->name;
  $sport=sport::where('name','like',"%$r->name%")->get();
    return view('vsport',['data'=> $sport]);
}

function searchacademic(Request $r)
{
  // return $r->name;
  $academic=academic::where('name','like',"%$r->name%")->get();
    return view('vacademic',['data'=> $academic]);
}
function searchexam(Request $r)
{
  // return $r->name;
  $exam=exam::where('name','like',"%$r->name%")->get();
    return view('vexam',['data'=> $exam]);
}

function population($id,Request $r){

$event=event::where('id',$id)->get();
return view('updateevent',['data'=>$event]);
}
function populationsport($id){
 
  $sport=sport::where('id',$id)->get();
  
  return view('updatesport',['data'=>$sport]);
}
function populationacademic($id,Request $r)
{
  $academic=academic::where('id',$id)->get();
  return view('updateacademic',['data'=>$academic]);
}
function populationexam($id,Request $r){
  $exam=exam::where('id',$id)->get();
  return view('updateexam',['data'=>$exam]);
}

function deleteevent($id,Request $r){
  
  $event=event::destroy($id);
  return redirect()->back();
}
function deletesport($id,Request $r){
  $sport=sport::destroy($id);

  return redirect()->back();
}
function deleteacademic($id,Request $r){
  $academic=academic::destroy($id);
  return redirect()->back();
}
function deleteexam($id,Request $r){
  $exam=exam::destroy($id);
  return redirect()->back();
}

function updateevent($id,Request $r){
$r->validate([
   'en'=>'required',
   'name'=>'required|min:1',
   'ern'=>'required|min:10',
   'semname'=>'required|between:1,6',
   'div'=>'required',
   'tc'=>'required',
]);
$event=new event();
$event=event::find($id);
$event->eventname=$r->en;
$event->name=$r->name;
$event->en=$r->ern;
$event->semname=$r->semname;
$event->division=$r->div;
$event->complaintdetails=$r->tc;

if($event->save())
  {
    
  return redirect()->back()->with(['success'=>'Update Data!']);
    }
    else
      {
      return redirect()->back()->with(['Error'=>'Data is not Update']);

      }
  


}
function updatesport($id,Request $r)
{
  $r->validate([
    'en'=>'required',
    'name'=>'required|min:1',
    'ern'=>'required|min:10',
    'semname'=>'required|between:1,6',
    'div'=>'required',
    'tc'=>'required'
  ]);

  $sport=new sport();
  $sport=sport::find($id);
  $sport->sportname=$r->en;
  $sport->name=$r->name;
  $sport->en=$r->ern;
  $sport->semname=$r->semname;
  $sport->division=$r->div;
  $sport->complaintdetails=$r->tc;
  $sport->save();
  if($sport){
    return redirect()->back()->with(['successs'=>'Updata Data!']);
    }
    else{
    return redirect()->back()->with(['Error'=>'Data is not Update']);

  }
  
}
function uppdateacademic($id,Request $r)
{
  $r->validate([
   'en'=>'required',
   'name'=>'required|min:1',
   'ern'=>'required|min:10',
   'semname'=>'required|between:1,6',
   'div'=>'required',
   'tc'=>'required'
  ]);

  $academic=new academic();
  $academic=academic::find($id);
  $academic->academicname=$r->en;
  $academic->name=$r->name;
  $academic->en=$r->ern;
  $academic->semname=$r->semname;
  $academic->division=$r->div;
  $academic->complaintdetails=$r->tc;
  $academic->save();
  if($academic){
    return redirect()->back()->with(['success'=>'Update Data!']);
  }
  else{
    return redirect()->back()->with(['Error'=>'Data is not Update']);
  }
}
function updateexam($id,Request $r){
  $r->validate([
    // unique:exam,name
   'en'=>'required',
   'name'=>'required|min:1',
   'ern'=>'required|min:10',
   'semname'=>'required|between:1,6',
   'div'=>'required',
   'tc'=>'required'
  ]);
  $exam=new exam();
  $exam=exam::find($id);
  $exam->examname=$r->en;
  $exam->name=$r->name;
  $exam->en=$r->ern;
  $exam->semname=$r->semname;
  $exam->division=$r->div;
  $exam->complaintdetails=$r->tc;
 $exam->save();
 if($exam){
  return redirect()->back()->with(['success'=>'Update Data!']);
 }
 else{
  return redirect()->back()->with(['Error'=>'Data is not Update']);
 }

}
function login(Request $r)
{
  // $r->validate([
  //   'name'=>'required|min:1|unique:signup,name',
  //   'email'=>'required|email|unique:signup,email',
  //   'ern'=>'required|min:10|unique:signup,ern',
  //   'password'=>'required|min:6',
  //   'cp'=>'required|same:password',
  //   'photo'=>'required'
  //   ]);
   
$name=$r->name;
$signup=signup::where('name',$name)->first();
// return $signup['password'];
if($signup)
  {
    if($r->password==$signup['password'])
      {

        $login=new login();
        $login->name=$r->name;
        $login->password=$r->password;
        if($login->save()){
          // return redirect()->back()->with(['success'=>'Login Done!']);
          session()->put('nn',$r->name);
          // session()->forget('nn');
          return redirect('/home');
          }
          
          }
          else
            {
              return redirect()->back()->with(['error'=>'Incorrect Password!']);
            }
  }
  else{
    return redirect()->back()->with(['error'=>'Please Signup!']);
  }
 
}
function add()
{
  if(session()->has('nn'))
    {
      return view('AddComplaint');
    }
    else
      {
        // return redirect('home')->with(['l','Please Login!']);
        return redirect('home');
      }
}
function vc()
{
  if(session()->has('nn'))
    {
      return view('vc');
    }
    else
      {
       return redirect('home');
      }
}
function bvc()
{
  if(session()->has('nn'))
    {
      return view('vc');
    }
    else
      {
       return redirect('home');
      }
}


function signup(Request $r){
$r->validate([
  'name'=>'required|unique:signup,name',
  'email'=>'required|unique:signup,email|email',
  'ern'=>'required|unique:signup,ern|min:10',
  'password'=>'required|min:6',
  'cp'=>'required|same:password',
  'photo'=>'required'
]);
$filename=$r->file('photo')->getClientOriginalName();
$r->file('photo')->move(public_path('.images'),$filename);
$signup=new signup();
$signup->name=$r->name;
$signup->email=$r->email;
$signup->ern=$r->ern;
$signup->password=$r->password;
$signup->cp=$r->cp;
$signup->photo=$filename;
if($signup->save()){
 
  return redirect('/l');

}



}

function adminevent(Request $r)
{
  $event=event::all();
  $sport=sport::all();
  $academic=academic::all();
  $exam=exam::all();
  $signup=signup::all();


  
  if($e=event::first())
    {
      session()->put('id1',$e['id']);
      session()->put('name1',$e['name']);
      session()->put('cd1',$e['complaintdetails']);
    }
    else
      {
        session()->put('id1',"No Id");
      session()->put('name1',"No Name");
      session()->put('cd1',"No Complaintdetails");
      }
  
  if($s=sport::first())
  {

    // echo $s['name'];
    session()->put('id2',$s['id']);
    session()->put('name2',$s['name']);
    session()->put('cd2',$s['complaintdetails']);
    }
    else
      {
      session()->put('id2',"No Id");
    session()->put('name2',"No Name");
    session()->put('cd2','No Complaintdetails');
      }

       if($a=academic::first())
  {

    // echo $s['name'];
    session()->put('id3',$a['id']);
    session()->put('name3',$a['name']);
    session()->put('cd3',$a['complaintdetails']);
    }
    else
      {
      session()->put('id3',"No Id");
    session()->put('name3',"No Name");
    session()->put('cd3','No Complaintdetails');
      }

    if($ex=exam::first())
  {

    // echo $s['name'];
    session()->put('id4',$ex['id']);
    session()->put('name4',$ex['name']);
    session()->put('cd4',$ex['complaintdetails']);
    }
    else
      {
      session()->put('id4',"No Id");
    session()->put('name4',"No Name");
    session()->put('cd4','No Complaintdetails');
      }
 
$c=count($event);
  $c1=count($sport);
  $c2=count($academic);
  $c3=count($exam);
$c4=count($signup);

  return view('admindashboard',['c'=>$c,
     'c1'=>$c1,
      'c2'=>$c2,
      'c3'=>$c3,
      'c4'=>$c4]);
  // $sum=0;
//  $a=[1,2,3,4];
//  for($i=0;$i<count($a);$i++)
//   {
//     echo $a[$i];
//   }
  // $a='tirthchhatrala';
  // // $b='tirth chhatrala';
  // $b='tirth chhatrala';

  // // echo str_contains($b,$a);
  // echo strcmp($a,$b);
  // print_r($event);
  // $a='tirth';
  // $a=[1,2,3,4];
  // echo count($a);
  // echo count('t',$a);
 
    // echo $sum;
  // return view('admindashboard',['data'=>$event]);
}

function showsignup()
{
  $signup=signup::all();
  return view('ms',['data'=>$signup]);
}
// function check(Request $r)
// {
// $a=$r->check;
// if($a=='on')
//   {
//     session()->put('a','DONE');
//     return "DONE";
//   }
//   else
//     {
//       return "NOT DONE";
//     }
// }
function signupadmin(Request $r)
{
$r->validate([
 'name'=>'required|unique:adminsignup,name',
 'email'=>'required|unique:adminsignup,email|email',
 'password'=>'required|min:6',
 'cp'=>'required|min:6',
//  'cp'=>'required|min:6',
]);
$as=new adminsignup();
$as->name=$r->name;
$as->email=$r->email;
$as->password=$r->password;
$as->cp=$r->cp;
if($as->save())
  {
    return redirect()->back()->with(['success'=>'Signup Done!']);
  }

}



function loginadmin(Request $r)
{
  $as=adminsignup::where('name',$r->name)->first();
  if($as)
    {
      if($as['password']==$r->password)
        {

          $al=new adminlogin();
          $al->name=$r->name;
          $al->password=$r->password;
          if($al->save())
            {
              session()->put('n',$r->name);
            
              return redirect('/adminevent');
              }
        }
        else
          {
            return redirect()->back()->with(['error'=>'Incorrect Password!']);
          }
    }
    else
      {
        return redirect()->back()->with(['error'=>'Please Admin Signup!']);
      }
}



function dl()
{
  session()->forget('n');
  return redirect('home');
}
}
