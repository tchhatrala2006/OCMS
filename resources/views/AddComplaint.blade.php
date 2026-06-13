<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Complaint</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Segoe UI, Arial, sans-serif;
}

body{
    background:#f4f6f9;
    display:flex;
}

/* SIDEBAR */
.sidebar{
    width:220px;
    min-height:100vh;
    background:#111827;
    padding:20px;
    color:white;
}
.sidebar h2{
    margin-bottom:30px;
    text-align:center;
}
.sidebar ul{
    list-style:none;
}
.sidebar ul li{
    padding:12px;
    margin-bottom:10px;
    border-radius:6px;
    cursor:pointer;
}
.sidebar ul li:hover{
    background:#374151;
}

/* MAIN */
.main{
    flex:1;
    padding:20px;
}

/* HEADER */
.header{
    background:white;
    padding:15px;
    border-radius:10px;
    margin-bottom:20px;
}

/* CATEGORY */
.categories{
    display:flex;
    gap:20px;
    flex-wrap:wrap;
}

/* HIDE RADIO */
input[type="radio"]{
    display:none;
}

/* CARD */
.cat{
    flex:1;
    min-width:200px;
    background:#ffffff;
    padding:20px;
    text-align:center;
    border-radius:12px;
    cursor:pointer;
    box-shadow:0 4px 12px rgba(0,0,0,.1);
    /* height:50vh; */
    transition:0.3s;
    border:1px solid #e5e7eb;
}

/* hover effect */
.cat:hover{
    background: linear-gradient(135deg, #2563eb, #1e40af);
    color:white;
    transform:translateY(-6px);
    box-shadow:0 10px 25px rgba(0,0,0,.2);
}

/* all inner text */
.cat:hover *{
    color:white;
}

/* FORM */
.form-box{
    margin-top:20px;
    display:none;
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,.1);
}

/* SHOW FORM BASED ON RADIO */
#event:checked ~ .forms #eventForm,
#sport:checked ~ .forms #sportForm,
#academic:checked ~ .forms #academicForm,
#exam:checked ~ .forms #examForm{
    display:block;
}

/* INPUT */
input, textarea,select{
    width:100%;
    padding:10px;
    margin-bottom:10px;
    border-radius:6px;
    border:1px solid #ccc;
    /* color:red; */
}

button{
    width:100%;
    padding:10px;
    background:#2563eb;
    color:white;
    border:none;
    border-radius:6px;
    cursor:pointer;
}

button:hover{
    background:#1e40af;
}
/* div[type="text"]{
    background-color:black;
} */
/* FOOTER */
.footer{
    margin-top:30px;
    background:#111827;
    color:white;
    padding:30px 20px 10px 20px;
    border-radius:12px;
}

.footer-content{
    display:flex;
    justify-content:space-between;
    flex-wrap:wrap;
    gap:20px;
}

.footer-section{
    flex:1;
    min-width:220px;
}

.footer-section h3,
.footer-section h4{
    margin-bottom:10px;
    color:#3b82f6;
}

.footer-section ul{
    list-style:none;
    padding:0;
}

.footer-section ul li{
    margin-bottom:6px;
    cursor:pointer;
}

.footer-section ul li:hover{
    text-decoration:underline;
}

.footer-bottom{
    text-align:center;
    margin-top:20px;
    padding-top:10px;
    border-top:1px solid gray;
    font-size:14px;
}
.ie{
   border: 1px solid red;
}
</style>
</head>

<body>

<div class="sidebar">
    <h2>OCMS</h2>
    <ul>
        <li id="add">{{__('welcome.heading1')}}</li>
        <!-- <li>{{__('welcome.heading42')}}</li> -->
        <li id="vc">{{__('welcome.heading3')}}</li>
        <li id="about">{{__('welcome.heading4')}}</li>
    </ul>
</div>

<div class="main">

<div class="header">
    <h2>{{__('welcome.heading25')}}</h2>
</div>

<!-- RADIO BUTTONS -->
<!-- <input type="radio" name="cat" id="event">
<input type="radio" name="cat" id="sport">
<input type="radio" name="cat" id="academic">
<input type="radio" name="cat" id="exam"> -->

<!-- CATEGORY CARDS -->
<div class="categories" type="text">
    <label for="event" class="cat" id="eventForm1">{{__('welcome.heading26')}}</label>
    <label for="sport" class="cat" id="sportFrom1">{{__('welcome.heading27')}}</label>
    <label for="academic" class="cat" id="academicFrom1">{{__('welcome.heading28')}}</label>
    <label for="exam" class="cat" id="examForm1">{{__('welcome.heading29')}}</label>
</div>

<!-- FORMS -->
<div class="forms">

<div id="eventForm" class="form-box">
<form action="{{url('/eventadd')}}" method="post">
@csrf
    <h3>{{__('welcome.heading26')}}</h3>
    
    <input type="text" placeholder="{{__('welcome.heading30')}}" name="en">
    

    <input type="text" placeholder="{{__('welcome.heading31')}}" name="name">
    <input type="number" placeholder="{{__('welcome.heading32')}}" name="ern">
    <!-- <input type="number" placeholder="Semeter" name="sem"> -->
    <select name="semname" id="">
        <option value="Sem">{{__('welcome.heading33')}}</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select>
    <input type="text" placeholder="{{__('welcome.heading34')}}" name="div">
    <textarea placeholder="{{__('welcome.heading35')}}" name="tc"></textarea>
    <button type="submit">{{__('welcome.heading42')}}</button>
</form>
</div>

<div id="sportForm" class="form-box">
    <form action="" method="post">

        <h3>{{__('welcome.heading36')}}</h3>
        <input type="text" placeholder="{{__('welcome.heading36')}}" name="sn">
        <input type="text" placeholder="{{__('welcome.heading31')}}" name="name">
        <input type="number" placeholder="{{__('welcome.heading32')}}" name="ern">
        <!-- <input type="number" placeholder="Semeter" name="sem"> -->
        <select name="semname" id="">
            <option value="Sem">{{__('welcome.heading33')}}</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <input type="text" placeholder="{{__('welcome.heading34')}}" name="div">
        <textarea placeholder="{{__('welcome.heading37')}}" name="tc"></textarea>
        <button type="submit">{{__('welcome.heading42')}}</button>
    </form>
</div>

<div id="academicForm" class="form-box">
<form action="" method="post">

    <h3>{{__('welcome.heading38')}}</h3>
    <input type="text" placeholder="{{__('welcome.heading38')}}" name="an">
    <input type="text" placeholder="{{__('welcome.heading31')}}" name="name">
    <input type="number" placeholder="{{__('welcome.heading32')}} Number" name="ern">
    <!-- <input type="number" placeholder="Semeter" name="sem"> -->
    <select name="semname" id="">
        <option value="Sem">{{__('welcome.heading33')}}</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select>
    <input type="text" placeholder="{{__('welcome.heading34')}}" name="div">
    <textarea placeholder="{{__('welcome.heading39')}}" name="tc"></textarea>
    <button type="submit">{{__('welcome.heading42')}}</button>
</form>
</div>

<div id="examForm" class="form-box">
    <form action="" method="post">

        <h3>{{__('welcome.heading40')}}</h3>
        <input type="text" placeholder="{{__('welcome.heading40')}}" name="exn">
        <input type="text" placeholder="{{__('welcome.heading31')}}" name="name">
        <input type="number" placeholder="{{__('welcome.heading32')}}" name="ern">
        <!-- <input type="number" placeholder="Semeter" name="sem"> -->
        <select name="semname" id="">
            <option value="Sem">{{__('welcome.heading33')}}</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <input type="text" placeholder="{{__('welcome.heading34')}}" name="div">
        <textarea placeholder="{{__('welcome.heading41')}}" name="tc"></textarea>
        <button type="submit">{{__('welcome.heading42')}}</button>
    </form>
</div>

</div>

</div>
<!-- <footer class="footer">
    <div class="footer-content">

        <div class="footer-section">
            <h3>OCMS</h3>
            <p>{{__('welcome.heading16')}}</p>
        </div>

        <div class="footer-section">
            <h4>Quick Links</h4>
            <ul>
                <li>{{__('welcome.heading1')}}</li>
                <li>{{__('welcome.heading2')}}</li>
                <li>{{__('welcome.heading3')}}</li>
                <li>{{__('welcome.heading4')}}</li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>{{__('welcome.heading12')}}</h4>
            <ul>
                <li>{{__('welcome.heading20')}}</li>
                <li>{{__('welcome.heading21')}}</li>
                <li>{{__('welcome.heading22')}}</li>
                <li>{{__('welcome.heading23')}}</li>
            </ul>
        </div>

    </div>

    <div class="footer-bottom">
        {{__('welcome.heading19')}}
    </div>
</footer> -->
<script>
    let eventForm=document.getElementById("eventForm1");
    eventForm.addEventListener("click",function(){
        window.location.href="/Event"
    })

    let sportFrom=document.getElementById("sportFrom1");
    sportFrom1.addEventListener("click",function(){
        window.location.href="/Sport"
    })

    let academicFrom=document.getElementById("academicFrom1");
    academicFrom.addEventListener("click",function(){
        window.location.href="/Academic"
    })

    let examForm=document.getElementById("examForm1");
    examForm.addEventListener("click",function(){
        window.location.href="/Exam"
    })

let add=document.getElementById("add");
let vc=document.getElementById("vc");
let about=document.getElementById("about");
let login=document.getElementById("login");
add.addEventListener("click",function(){
    window.location.href="/home";
})
vc.addEventListener("click",function(){
    window.location.href="/vc";
})
about.addEventListener("click",function(){
    window.location.href="/about";
})
login.addEventListener("click",function(){
    window.location.href="/l";
})
</script>
</body>
</html>