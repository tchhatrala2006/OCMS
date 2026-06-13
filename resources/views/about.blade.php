<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Page</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Segoe UI, Arial, sans-serif;
}

body{
    background:#f4f6f9;
    color:#111827;
}

/* SIDEBAR */
.sidebar{
    width:220px;
    min-height:100vh;
    background:#111827;
    padding:20px;
    color:white;
    position:fixed;
    left:0;
    top:0;
}

.sidebar h2{
    margin-bottom:30px;
    text-align:center;
    color:#3b82f6;
    font-size:28px;
}

.sidebar ul{
    list-style:none;
}

.sidebar ul li{
    padding:12px 15px;
    margin-bottom:12px;
    border-radius:8px;
    cursor:pointer;
    transition:.3s;
}

.sidebar ul li:hover{
    background:#374151;
    transform:translateX(5px);
}

/* MAIN */
.main{
    margin-left:240px;
    padding:20px;
}

/* HERO */
.hero{
    background:linear-gradient(120deg,#2563eb,#1e40af);
    color:white;
    text-align:center;
    padding:80px 20px;
    border-radius:15px;
}

.hero h1{
    font-size:40px;
    margin-bottom:15px;
}

.hero p{
    max-width:800px;
    margin:auto;
    line-height:1.8;
    font-size:18px;
}

/* ABOUT */
.about{
    margin-top:40px;
    display:flex;
    gap:25px;
    flex-wrap:wrap;
}

.about-card{
    flex:1;
    min-width:300px;
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 4px 12px rgba(0,0,0,.1);
    transition:.3s;
}

.about-card:hover{
    transform:translateY(-6px);
}

.about-card h2{
    color:#2563eb;
    margin-bottom:15px;
}

.about-card p{
    color:#4b5563;
    line-height:1.8;
}

/* FOOTER */
.footer{
    background:#111827;
    color:white;
    margin-top:60px;
    padding:40px 20px 15px;
    border-radius:15px;
}

.footer-content{
    display:flex;
    justify-content:space-between;
    gap:30px;
    flex-wrap:wrap;
}

.footer-box{
    flex:1;
    min-width:220px;
}

.footer-box h3{
    margin-bottom:15px;
    color:#3b82f6;
}

.footer-box ul{
    list-style:none;
}

.footer-box ul li{
    margin-bottom:8px;
    cursor:pointer;
}

.footer-box ul li:hover{
    text-decoration:underline;
}

.footer-bottom{
    margin-top:25px;
    text-align:center;
    border-top:1px solid gray;
    padding-top:12px;
    font-size:14px;
}
</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>OCMS</h2>
    <ul>
        <li id="home">{{__('welcome.heading1')}}</li>
        <li id="add">{{__('welcome.heading2')}}</li>
        <li id="vc">{{__('welcome.heading3')}}</li>
        <!-- <li id="about">{{__('welcome.heading4')}}</li> -->
        <!-- <li id="login">{{__('welcome.heading5')}}</li> -->
    </ul>
</div>

<!-- MAIN -->
<div class="main">

    <!-- HERO -->
    <section class="hero">
        <h1>{{__('welcome.heading43')}}</h1>
        <p>{{__('welcome.heading44')}}</p>
    </section>
 <!-- NEW ADDED SECTION -->
    <section class="about">

        <div class="about-card" style="flex:100%;">
            <h2>{{__('welcome.heading10')}}</h2>
            <p>
                {{__('welcome.heading24')}}
            </p>
        </div>

    </section>
    <!-- ABOUT -->
    <section class="about">

        <div class="about-card">
            <h2>{{__('welcome.heading45')}}</h2>
            <p>{{__('welcome.heading46')}}</p>
        </div>

        <div class="about-card">
            <h2>{{__('welcome.heading47')}}</h2>
            <p>{{__('welcome.heading48')}}</p>
        </div>

    </section>

   

    <!-- FOOTER -->
    <footer class="footer">

        <div class="footer-content">

            <div class="footer-box">
                <h3>OCMS</h3>
                <p>{{__('welcome.heading63')}}</p>
            </div>

            <div class="footer-box">
                <h3>{{__('welcome.heading17')}}</h3>
                <ul>
                    <li>{{__('welcome.heading1')}}</li>
                    <li>{{__('welcome.heading2')}}</li>
                    <li>{{__('welcome.heading3')}}</li>
                    <li>{{__('welcome.heading5')}}</li>
                </ul>
            </div>

            <div class="footer-box">
                <h3>{{__('welcome.heading67')}}</h3>
                <ul>
                    <li>{{__('welcome.heading69')}}</li>
                    <li>{{__('welcome.heading70')}}</li>
                    <li>{{__('welcome.heading71')}}</li>
                </ul>
            </div>

        </div>

        <div class="footer-bottom">
            {{__('welcome.heading72')}}
        </div>

    </footer>

</div>

<!-- JS -->
<script>
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
vc.addEventListener("click",function(){
    window.location.href="/vc";
})
// add.addEventListener("change",function(){

// })
// about.addEventListener("click",function(){
//     window.location.href="/about";
// })
// login.addEventListener("click",function(){
//     window.location.href="/l";
// })
</script>

</body>
</html>