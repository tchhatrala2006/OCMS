<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Complaint List</title>

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

/* SEARCH BOX */
.search-box{
    margin-bottom:20px;
}
.search-box input{
    padding:10px;
    width:250px;
    border:1px solid #ccc;
    border-radius:6px;
}
.search-box button{
    padding:10px 15px;
    background:#2563eb;
    color:white;
    border:none;
    border-radius:6px;
    cursor:pointer;
}
.search-box button:hover{
    background:#1e40af;
}

/* TABLE */
table{
    width:100%;
    border-collapse:collapse;
    background:white;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

table th{
    background:#1f2937;
    color:white;
    padding:12px;
    font-size:14px;
}

table td{
    padding:10px;
    text-align:center;
    border-bottom:1px solid #eee;
}

table tr:hover{
    background:#f1f5f9;
}
</style>

</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>Dashboard</h2>
    <ul>
      <li id="home">{{__('welcome.heading1')}}</li>
        <li id="add">{{__('welcome.heading2')}}</li>
        <li id="vc">{{__('welcome.heading3')}}</li>
        <li id="about">{{__('welcome.heading4')}}</li>
        <!-- <li>{{__('welcome.heading5')}}</li> -->
    </ul>
</div>

<!-- MAIN CONTENT -->
<div class="main">

    <!-- SEARCH -->
     @yield('form')

    <!-- TABLE -->
    <table>
        <tr>
          @yield('content')
        </tr>

       
    </table>

</div>
<script>
       let home=document.getElementById("home");
    let add=document.getElementById("add");
let vc=document.getElementById("vc");
let about=document.getElementById("about");
// let login=document.getElementById("login");
// let admin=document.getElementById("admin");
home.addEventListener("click",function(){
    window.location.href="/home";
})
add.addEventListener("click",function(){
    window.location.href="/Add";
})
vc.addEventListener("click",function(){
    window.location.href="/vc";
})
about.addEventListener("click",function(){
    window.location.href="/about";
})
</script>
</body>
</html>