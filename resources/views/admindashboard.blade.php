<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OCMS Admin Dashboard</title>

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
    width:240px;
    min-height:100vh;
    background:#111827;
    padding:25px 20px;
    color:white;
    position:fixed;
    left:0;
    top:0;
}

.sidebar h2{
    text-align:center;
    margin-bottom:40px;
    font-size:28px;
    color:#3b82f6;
}

.sidebar ul{
    list-style:none;
}

.sidebar ul li{
    padding:14px 15px;
    margin-bottom:12px;
    border-radius:10px;
    cursor:pointer;
    transition:.3s;
    font-size:16px;
}

.sidebar ul li:hover{
    background:#374151;
    transform:translateX(5px);
}

/* MAIN */
.main{
    margin-left:240px;
    width:100%;
    padding:25px;
}

/* TOPBAR */
.topbar{
    background:white;
    padding:18px 25px;
    border-radius:15px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 4px 12px rgba(0,0,0,.08);
}

.topbar h1{
    color:#111827;
    font-size:28px;
}

.admin-box{
    background:linear-gradient(120deg,#2563eb,#1e40af);
    color:white;
    padding:10px 18px;
    border-radius:30px;
    font-weight:bold;
}

/* WELCOME */
.welcome{
    margin-top:25px;
    background:linear-gradient(120deg,#2563eb,#1e40af);
    padding:40px;
    border-radius:20px;
    color:white;
    box-shadow:0 8px 20px rgba(37,99,235,.3);
}

.welcome h2{
    font-size:35px;
    margin-bottom:10px;
}

.welcome p{
    font-size:17px;
    line-height:1.7;
}

/* CARDS */
.cards{
    margin-top:30px;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(230px,1fr));
    gap:25px;
}

/* SINGLE CARD */
.card{
    background:white;
    padding:30px 25px;
    border-radius:20px;
    position:relative;
    overflow:hidden;
    box-shadow:0 6px 15px rgba(0,0,0,.08);
    transition:.4s;
}

.card:hover{
    transform:translateY(-8px);
}

.card::before{
    content:'';
    position:absolute;
    width:120px;
    height:120px;
    background:#dbeafe;
    border-radius:50%;
    top:-40px;
    right:-40px;
}

.card h3{
    color:#6b7280;
    margin-bottom:15px;
    font-size:18px;
}

.card h1{
    color:#2563eb;
    font-size:42px;
}

/* DIFFERENT COLORS */
.pending h1{
    color:#f59e0b;
}

.solved h1{
    color:#22c55e;
}

.students h1{
    color:#ec4899;
}

/* TABLE SECTION */
.table-section{
    margin-top:40px;
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 6px 15px rgba(0,0,0,.08);
}

.table-section h2{
    margin-bottom:20px;
    color:#2563eb;
}

/* TABLE */
table{
    width:100%;
    border-collapse:collapse;
}

table th{
    background:#111827;
    color:white;
    padding:15px;
}

table td{
    padding:15px;
    text-align:center;
    border-bottom:1px solid #e5e7eb;
}

table tr:hover{
    background:#f9fafb;
}

/* STATUS */
.status{
    padding:6px 15px;
    border-radius:20px;
    color:white;
    font-size:14px;
}

.solved-status{
    background:#22c55e;
}

.pending-status{
    background:#f59e0b;
}

/* RESPONSIVE */
@media(max-width:768px){

    body{
        flex-direction:column;
    }

    .sidebar{
        position:relative;
        width:100%;
        min-height:auto;
    }

    .main{
        margin-left:0;
    }

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
        <li id="c">Manage Students</li>
        <li id="d">Logout</li>
    </ul>

</div>

<!-- MAIN -->
<div class="main">

    <!-- TOPBAR -->
    <div class="topbar">

        <h1>Admin Dashboard</h1>

        <div class="admin-box">
            Welcome, {{session('n')}}
        </div>

    </div>

    <!-- WELCOME -->
    <div class="welcome">

        <h2>Online Complaint Management System</h2>

        <p>
            Manage student complaints efficiently with a secure,
            fast, and modern dashboard system.
        </p>

    </div>

    <!-- CARDS -->
    <div class="cards">

        <div class="card">
            <h3>Event Total Complaints</h3>
            <h1>
                {{$c}}
            </h1>
        </div>

        <div class="card pending">
            <h3>Sport Total Complaints</h3>
            <h1>{{$c1}}</h1>
        </div>

        <div class="card solved">
            <h3>Academic Total Complaints</h3>
            <h1>{{$c2}}</h1>
        </div>
        <div class="card solved">
            <h3>Exam Total Complaints</h3>
            <h1>{{$c3}}</h1>
        </div>

        <div class="card students">
            <h3>Registered Students</h3>
            <h1>{{$c4}}</h1>
        </div>

    </div>

    <!-- TABLE -->
    <div class="table-section">

        <h2>Recent Complaints</h2>

        <table>

            <tr>
                <th>ID</th>
                <th>Student</th>
                <th>Complaint</th>
                
            </tr>

            <tr>
                <td>{{session('id1')}}</td>
                <td>{{session('name1')}}</td>
                <td>{{session('cd1')}}</td>
                
            </tr>

            <tr>
                <td>{{session('id2')}}</td>
                <td>{{session('name2')}}</td>
                <td>{{session('cd2')}}</td>
               
            </tr>
            <tr>
                <td>{{session('id3')}}</td>
                <td>{{session('name3')}}</td>
                <td>{{session('cd3')}}</td>
               
            </tr>
            <tr>
                <td>{{session('id4')}}</td>
                <td>{{session('name4')}}</td>
                <td>{{session('cd4')}}</td>
               
            </tr>

           
        </table>

    </div>

</div>
<script>
    let a=document.getElementById("a");
    let b=document.getElementById("b");
    let c=document.getElementById("c");
    let d=document.getElementById("d");

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