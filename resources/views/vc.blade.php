@extends('components/layout')
@section('title','View Complaint')
@section('content')


 <ul>
        <li id="home">{{__('welcome.heading1')}}</li>
        <!-- <li>{{__('welcome.heading42')}}</li> -->
         <li id="add">{{__('welcome.heading2')}}</li>
        <!-- <li>{{__('welcome.heading3')}}</li> -->
        <li id="about">{{__('welcome.heading4')}}</li>
    </ul>
<script>
    let add=document.getElementById("add");
    let home=document.getElementById("home");
let vc=document.getElementById("vc");
let about=document.getElementById("about");
let login=document.getElementById("login");
home.addEventListener("click",function(){
    window.location.href="/home";
})
add.addEventListener("click",function(){
    window.location.href="/Add";
})
// vc.addEventListener("click",function(){
//     window.location.href="/vc";
// })
about.addEventListener("click",function(){
    window.location.href="/about";
})
// login.addEventListener("click",function(){
//     window.location.href="/l";
// })
</script>
@endsection()

