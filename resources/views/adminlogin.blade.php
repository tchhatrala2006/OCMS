<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Segoe UI, Arial, sans-serif;
        }

        body{
            background:#f4f7f8;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        /* FORM BOX */
        .form-box{
            width:380px;
            background:white;
            padding:35px;
            border-radius:15px;
            box-shadow:0 8px 20px rgba(0,0,0,.1);
        }

        .form-box h2{
            text-align:center;
            margin-bottom:25px;
            color:#111827;
        }

        /* INPUTS */
        .form-box input{
            width:100%;
            padding:12px 15px;
            margin-bottom:12px;
            border:1px solid #d1d5db;
            border-radius:8px;
            outline:none;
            transition:.3s;
            font-size:15px;
        }

        .form-box input:focus{
            border-color:#2563eb;
            box-shadow:0 0 5px rgba(37,99,235,.3);
        }

        /* FILE INPUT */
        .form-box input[type="file"]{
            background:#f9fafb;
            padding:10px;
        }

        /* BUTTON */
        .form-box button{
            width:100%;
            padding:12px;
            border:none;
            border-radius:8px;
            background:#2563eb;
            color:white;
            font-size:16px;
            cursor:pointer;
            transition:.3s;
        }

        .form-box button:hover{
            background:#1e40af;
        }

        /* ERROR */
        .ie{
            border:1px solid red !important;
        }

        #ei{
            color:red;
            font-size:14px;
            display:block;
            margin-bottom:10px;
        }

        /* SUCCESS MESSAGE */
        .su{
            background:lightgreen;
            padding:10px;
            border-radius:6px;
            margin-bottom:15px;
            text-align:center;
            box-shadow:0 2px 5px rgba(0,0,0,.1);
        }

        /* RESPONSIVE */
        @media(max-width:450px){

            .form-box{
                width:90%;
                padding:25px;
            }

        }
.su{
      
    /* position: absolute; */
        background-color: lightgreen;
    padding: 5px;
    border-radius: 5px;
    color: black;
    box-shadow: 0px 2px 0px black;
}
 .su1{
      
    /* position: absolute; */
    background-color: lightcoral;
    padding: 5px;
    border-radius: 5px;
    color: black;
    box-shadow: 0px 2px 0px black;
    margin-bottom: 10px;
}
.form-box a{
    display:inline-block;
    width:100%;
    text-align:center;
    padding:10px;
    margin:10px 0 15px 0;
    background:#eef2ff;
    color:#2563eb;
    border:1px solid #2563eb;
    border-radius:8px;
    text-decoration:none;
    font-weight:600;
    transition:0.3s;
}

.form-box a:hover{
    background:#2563eb;
    color:white;
    transform:translateY(-2px);
}
    </style>

</head>

<body>

    <div class="form-box">

        <h2>Admin Login</h2>

      

        <form action="{{url('/loginadmin')}}" method="post" enctype="multipart/form-data">

            @csrf
       @if(session()->has('success'))

               <h3 class="su">{{session('success')}}</h3>
        @elseif(session()->has('error'))

         <h3 class="su1">{{session('error')}}</h3>

       @endif

            <input type="text" 
                   name="name" 
                   placeholder="Enter Name"
                   class="{{$errors->first('name') ? 'ie' : ''}}">

            <span id="ei">
                @error('name') {{$message}} @enderror
            </span>


            <!-- <input type="text" 
                   name="email" 
                   placeholder="Enter Email"
                   class="{{$errors->first('email') ? 'ie' : ''}}">

            <span id="ei">
                @error('email') {{$message}} @enderror
            </span> -->


            <!-- <input type="text" 
                   name="ern" 
                   placeholder="Enter Enrollment Number"
                   class="{{$errors->first('ern') ? 'ie' : ''}}">

            <span id="ei">
                @error('ern') {{$message}} @enderror
            </span> -->


            <input type="password" 
                   name="password" 
                   placeholder="Enter Password"
                   class="{{$errors->first('password') ? 'ie' : ''}}">

            <span id="ei">
                @error('password') {{$message}} @enderror
            </span>


            <!-- <input type="password" 
                   name="cp" 
                   placeholder="Confirm Password"
                   class="{{$errors->first('cp') ? 'ie' : ''}}">

            <span id="ei">
                @error('cp') {{$message}} @enderror
            </span> -->


            <!-- <input type="file" 
                   name="photo"
                   class="{{$errors->first('photo') ? 'ie' : ''}}">

            <span id="ei">
                @error('photo') {{$message}} @enderror
            </span> -->
<a href="/as">Admin Signup</a>
<a href="/home">Home</a>
            <button type="submit">
                Login
            </button>

        </form>

    </div>

</body>
</html>