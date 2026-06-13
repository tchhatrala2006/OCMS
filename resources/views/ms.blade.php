<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>

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
    color:#3b82f6;
}

.sidebar ul{
    list-style:none;
}

.sidebar ul li{
    padding:12px;
    margin-bottom:10px;
    border-radius:6px;
    cursor:pointer;
    transition:0.3s;
}

.sidebar ul li:hover{
    background:#374151;
}

/* MAIN CONTENT */
.main{
    flex:1;
    padding:30px;
}

/* HEADING */
.heading{
    background:white;
    padding:20px;
    border-radius:10px;
    margin-bottom:20px;
    box-shadow:0 2px 10px rgba(0,0,0,.1);
}

.heading h1{
    color:#2563eb;
}

/* TABLE BOX */
.table-box{
    background:white;
    padding:20px;
    border-radius:12px;
    box-shadow:0 2px 10px rgba(0,0,0,.1);
    overflow-x:auto;
}

/* TABLE */
table{
    width:100%;
    border-collapse:collapse;
}

table th{
    background:#2563eb;
    color:white;
    padding:15px;
    text-align:left;
}

table td{
    padding:15px;
    border-bottom:1px solid #e5e7eb;
}

table tr:hover{
    background:#f9fafb;
}

/* IMAGE */
/* IMAGE */
table img{
    width:80px;
    height:80px;
    border-radius:10px;   /* square shape */
    object-fit:cover;
    border:3px solid #2563eb;
    display:block;
}

/* TABLE ROW HEIGHT */
table td{
    padding:18px;
    border-bottom:1px solid #e5e7eb;
    vertical-align:middle;
}

</style>

</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <h2>OCMS</h2>

    <ul>
         <li id="a"> Dashboard</li>
        <li id="b"> View Complaints</li>
        <!-- <li>⏳ Pending Complaints</li> -->
        <!-- <li>✅ Solved Complaints</li> -->
        <!-- <li id="c">Manage Students</li> -->
        <li id="d">Logout</li>
    </ul>

</div>

<!-- MAIN -->
<div class="main">

    <div class="heading">
        <h1>Registered Students</h1>
    </div>

    <div class="table-box">

        <table>

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Enrollment Number</th>
                <!-- <th>Photo</th> -->
                <th>Created Date</th>
            </tr>

            @foreach($data as $d)

            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->ern}}</td>

                <!-- <td>
                    <img src="{{asset('.images/'.$d->photo)}}" alt="">
                </td> -->

                <td>{{$d->createdt}}</td>
            </tr>

            @endforeach

        </table>

    </div>

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
</script>
</body>
</html>