@extends('components/avlayout')


@section('nav')

 <ul>
        <li id="a"> Dashboard</li>
        <!-- <li id="b"> View Complaints</li> -->
        <!-- <li>⏳ Pending Complaints</li> -->
        <!-- <li>✅ Solved Complaints</li> -->
        <li id="c">Manage Students</li>
        <li id="d">Logout</li>
    </ul>
    <script>
         let a=document.getElementById("a");
    let b=document.getElementById("b");
    let c=document.getElementById("c");
    let d=document.getElementById("d");

    a.addEventListener("click",function(){
        window.location.href="adminevent";
    })
     c.addEventListener("click",function(){
        window.location.href="showsignup";
    })
    </script>
@endsection