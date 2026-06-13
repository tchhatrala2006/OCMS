<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <h1>
     <!-- Online Complaint Management System -->
     {{__('welcome.heading1')}}
     {{__('welcome.heading1')}}
   
</h1>
    <a href="/h/hi">Hindi</a>
    <a href="{{url('/h/ja')}}">ja</a>
</body>


</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OCMS Home</title>

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
    display:flex;
    flex-direction:column;
}

/* HEADER */
.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:white;
    padding:15px 20px;
    border-radius:10px;
    box-shadow:0 2px 8px rgba(0,0,0,.1);
}

.user{
    background:#2563eb;
    color:white;
    padding:6px 15px;
    border-radius:20px;
}

/* HERO SECTION */
.hero{
    margin-top:20px;
    background:linear-gradient(120deg,#2563eb,#1e40af);
    color:white;
    padding:40px;
    border-radius:12px;
}
.hero h1{
    margin-bottom:10px;
}
.hero p{
    margin-bottom:20px;
}
.hero button{
    padding:10px 20px;
    border:none;
    border-radius:6px;
    background:white;
    color:#1e40af;
    font-weight:bold;
    cursor:pointer;
}
.hero button:hover{
    background:#e5e7eb;
}

/* ABOUT */
.about{
    margin-top:25px;
    background:white;
    padding:25px;
    border-radius:12px;
    box-shadow:0 2px 10px rgba(0,0,0,.1);
}

.about h2{
    margin-bottom:10px;
    color:#2563eb;
}

.features{
    display:flex;
    gap:20px;
    margin-top:20px;
    flex-wrap:wrap;
}

.feature-box{
    flex:1;
    min-width:250px;
    background:#f9fafb;
    padding:20px;
    border-radius:10px;
    box-shadow:0 1px 6px rgba(0,0,0,.1);
}

.feature-box h3{
    margin-bottom:10px;
}

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
</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>OCMS</h2>
    <ul>
        <li>Home</li>
        <li>Add Complaint</li>
        <li>View Complaint</li>
        <li>About</li>
        <li>Logout</li>
    </ul>
</div>
<a href="/h/hi">Hindi</a>
<!-- MAIN -->
<div class="main">

<div class="header">
    <h3>Online Complaint Management System</h3>
    <div class="user">TIRTH CHHATRALA</div>
</div>

<div class="hero">
    <h1>Welcome to OCMS</h1>
    <p>
        Submit your complaints online and track their status easily.
        This system reduces paperwork and improves response time.
    </p>
    <button>View Complaint</button>
</div>

<div class="about">
    <h2>About This Project</h2>
    <p>
        OCMS is developed using Laravel, MySQL, HTML, CSS and JavaScript.
        It allows users to register, login, submit complaints and check status.
        Admin can update complaint progress and provide solutions.
    </p>

    <div class="features">

        <div class="feature-box">
            <h3>Technologies Used</h3>
            <p>Laravel, MySQL, HTML, CSS, JavaScript</p>
        </div>

        <div class="feature-box">
            <h3>Main Features</h3>
            <p>User Login, Add Complaint, View Status, Admin Panel</p>
        </div>

        <div class="feature-box">
            <h3>Developer</h3>
            <p>Tirth Chhatrala (BCA Integrated)</p>
        </div>

    </div>
</div>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-content">

        <div class="footer-section">
            <h3>OCMS</h3>
            <p>Online platform for managing complaints efficiently.</p>
        </div>

        <div class="footer-section">
            <h4>Quick Links</h4>
            <ul>
                <li>Home</li>
                <li>Add Complaint</li>
                <li>View Complaint</li>
                <li>About</li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>Technologies</h4>
            <ul>
                <li>Laravel</li>
                <li>MySQL</li>
                <li>HTML & CSS</li>
                <li>JavaScript</li>
            </ul>
        </div>

    </div>

    <div class="footer-bottom">
        © 2026 OCMS | Developed by Tirth Chhatrala
    </div>
</footer>

</div>

</body>
</html>