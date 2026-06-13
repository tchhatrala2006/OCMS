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
     <li id="a"> Dashboard</li>
        <li id="b"> View Complaints</li>
        <!-- <li>⏳ Pending Complaints</li> -->
        <!-- <li>✅ Solved Complaints</li> -->
        <li id="c">Manage Students</li>
        <li id="d">Logout</li>
        <!-- <li>{{__('welcome.heading5')}}</li> -->
    </ul>
</div>

<!-- MAIN CONTENT -->
<div class="main">

    <!-- SEARCH -->
    <form action="{{url('/asport')}}" method="post" class="search-box">
        @csrf
        <input type="text" name="name" placeholder="Enter the Search Name">
        <button type="submit">Search</button>
    </form>

    <!-- TABLE -->
    <table>
        <tr>
            <th>Id</th>
            <th>SR.NO</th>
            <th>Sport Name</th>
            <th>Name</th>
            <th>Enrollment</th>
            <th>Semester</th>
            <th>Division</th>
            <th>Complaint</th>
            <th>Date</th>
            <th>Delete</th>
        </tr>

        @foreach($data as $d)
        <tr>
           <td>{{$d->id}}</td>
           <td>{{$loop->iteration}}</td>
           <td>{{$d->sportname}}</td>
           <td>{{$d->name}}</td>
           <td>{{$d->en}}</td>
           <td>{{$d->semname}}</td>
           <td>{{$d->division}}</td>
           <td>{{$d->complaintdetails}}</td>
           <td>{{$d->createdt}}</td>
            
         
           <td><a href="/deletesport/{{$d->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>

</div>
<script>

    let a=document.getElementById("a");
    let b=document.getElementById("b");
    let c=document.getElementById("c");
    let d=document.getElementById("d");

    a.addEventListener("click",function(){
        window.location.href="adminevent";
    })
    b.addEventListener("click",function(){
        window.location.href="avc";
    })
      c.addEventListener("click",function(){
        window.location.href="/showsignup";
    })
     d.addEventListener("click",function(){
        window.location.href="/dl";
    })
    </script>
</body>
</html>