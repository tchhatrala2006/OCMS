<!DOCTYPE html>
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
    gap:20px;
}

/* HEADER */
.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:white;
    padding:15px 20px;
    border-radius:12px;
    box-shadow:0 2px 10px rgba(0,0,0,0.08);
}

.lang{
    padding:6px 10px;
    border-radius:8px;
    border:none;
    background:#2563eb;
    color:white;
    cursor:pointer;
    margin-left: 39%;
}

.user{
    background:#2563eb;
    color:white;
    padding:6px 15px;
    border-radius:8px;
    font-size:13px;
}

/* HERO */
.hero{
    background:linear-gradient(120deg,#2563eb,#1e40af);
    color:white;
    padding:45px;
    border-radius:14px;
}

.hero h1{
    margin-bottom:10px;
    font-size:28px;
}

.hero p{
    margin-bottom:20px;
    opacity:0.9;
}

.hero button{
    padding:10px 22px;
    border:none;
    border-radius:8px;
    background:white;
    color:#1e40af;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

.hero button:hover{
    background:#e5e7eb;
    transform:scale(1.05);
}

/* FEATURES */
.features{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
    gap:20px;
}

.feature-box{
    background:white;
    padding:20px;
    border-radius:12px;
    box-shadow:0 2px 10px rgba(0,0,0,0.08);
    transition:0.3s;
}

.feature-box:hover{
    transform:translateY(-6px);
    box-shadow:0 10px 20px rgba(0,0,0,0.12);
}

.feature-box h3{
    margin-bottom:10px;
    color:#111827;
}

/* FOOTER */
.footer{
    background:#111827;
    color:white;
    padding:30px 20px 10px;
    border-radius:14px;
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
}

.footer-section ul li{
    margin-bottom:6px;
    cursor:pointer;
    font-size:14px;
}

.footer-section ul li:hover{
    text-decoration:underline;
}

.footer-bottom{
    text-align:center;
    margin-top:20px;
    padding-top:10px;
    border-top:1px solid gray;
    font-size:13px;
    opacity:0.8;
}
</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>OCMS</h2>
    <ul>
        <li>{{__('welcome.heading1')}}</li>
        <li id="add">{{__('welcome.heading2')}}</li>
        <li id="vc">{{__('welcome.heading3')}}</li>
        <li id="about">{{__('welcome.heading4')}}</li>
        <li id="login">{{__('welcome.heading5')}}</li>
        <li id="admin">{{__('welcome.heading75')}}</li>
    </ul>
</div>

<!-- MAIN -->
<div class="main">

    <!-- HEADER -->
    <div class="header">
        <h3>{{__('welcome.heading6')}}</h3>

        <select class="lang" id="a">
            <option value="">Languages</option>
            <option value="/h/gu">Gujarati</option>
            <option value="/h/en">English</option>
        </select>

        <div class="user">{{__('welcome.heading7')}}</div>
    </div>

    <!-- HERO -->
    <div class="hero">
        <h1>{{__('welcome.heading8')}}</h1>
        <p>{{__('welcome.heading9')}}</p>
        <button id="bvc">{{__('welcome.heading3')}}</button>
    </div>

    <!-- FEATURES (FIXED STRUCTURE) -->
    <div class="features">

        <div class="feature-box">
            <h3>{{__('welcome.heading76')}}</h3>
            <p>{{__('welcome.heading77')}}</p>
        </div>

        <div class="feature-box">
            <h3>{{__('welcome.heading78')}}</h3>
            <p>{{__('welcome.heading79')}}</p>
        </div>

        <div class="feature-box">
            <h3>{{__('welcome.heading12')}}</h3>
            <p>{{__('welcome.heading11')}}</p>
        </div>

        <div class="feature-box">
            <h3>{{__('welcome.heading13')}}</h3>
            <p>{{__('welcome.heading14')}}</p>
        </div>

        <div class="feature-box">
            <h3>{{__('welcome.heading15')}}</h3>
            <p>{{__('welcome.heading7')}} (BCA Integrated)</p>
        </div>

    </div>

    <!-- FOOTER -->
    <footer class="footer">

        <div class="footer-content">

            <div class="footer-section">
                <h3>OCMS</h3>
                <p>{{__('welcome.heading16')}}</p>
            </div>

            <div class="footer-section">
                <h4>{{__('welcome.heading17')}}</h4>
                <ul>
                    <li>{{__('welcome.heading1')}}</li>
                    <li>{{__('welcome.heading2')}}</li>
                    <li>{{__('welcome.heading3')}}</li>
                    <li>{{__('welcome.heading4')}}</li>
                    <li>{{__('welcome.heading5')}}</li>
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

    </footer>

</div>

<!-- JS -->
<script>
let a=document.getElementById("a");

function main()
{
    window.location.href=this.value

}
a.addEventListener("change",main);

let add=document.getElementById("add");
let vc=document.getElementById("vc");
let about=document.getElementById("about");
let login=document.getElementById("login");
let admin=document.getElementById("admin");
add.addEventListener("click",function(){
    window.location.href="/Add";
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
admin.addEventListener("click",function(){
    window.location.href="/al"
})
let bvc=document.getElementById('bvc').addEventListener("click",function(){
    window.location.href="/bvc";
})
// a.addEventListener("change",main);
</script>

</body>
</html>