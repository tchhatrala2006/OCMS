<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
        /* General body styling */
        body {
            font-family: 'Arial', sans-serif;
            background: #f4f7f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Form container */
        .form-box {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            width: 350px;
        }

        /* Form heading */
        .form-box h3 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
            font-size: 22px;
        }

        /* Input, select, textarea styling */
        .form-box input[type="text"],
        .form-box input[type="number"],
        .form-box select,
        .form-box textarea {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
            transition: 0.3s;
        }

        /* Focus effect for inputs */
        .form-box input:focus,
        .form-box select:focus,
        .form-box textarea:focus {
            border-color: #007BFF;
            outline: none;
        }

        /* Textarea height */
        .form-box textarea {
            height: 80px;
            resize: none;
        }

        /* Submit button styling */
        .form-box button {
            width: 100%;
            padding: 12px;
            background: #007BFF;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        /* Button hover effect */
        .form-box button:hover {
            background: #0056b3;
        }

        /* Placeholder color */
        ::placeholder {
            color: #aaa;
        }

        /* Responsive for small screens */
        @media (max-width: 400px) {
            .form-box {
                width: 90%;
                padding: 20px;
            }
        }
.ie {
    border: 1px solid red !important;
}
#ei{
    color:red;
}
.su{
      
    /* position: absolute; */
        background-color: lightgreen;
    padding: 5px;
    border-radius: 5px;
    color: black;
    box-shadow: 0px 2px 0px black;
}

    </style>
</head>
<body>
    @foreach($data as $d)
    <form action="{{URL::to('/uevent/'.$d->id)}}" method="post" class="form-box">
        <!-- <form action="{{URL::to('/uevent')}}" method="post" class="form-box"> -->
            @csrf
        @if(session('success'))

           <h3 class="su">{{session('success')}}</h3>
        @endif

        <span id="ei">@error('en'){{$message}}@enderror</span>
        <input type="text" placeholder="{{__('welcome.heading30')}}" name="en" value="{{$d->eventname}}"
        class="{{$errors->first('en')?'ie':''}}">
        
        <span id="ei">@error('name'){{$message}}@enderror</span>
        <input type="text" placeholder="{{__('welcome.heading31')}}" name="name" value="{{$d->name}}"
        class="{{$errors->first('name')?'ie':''}}">
        
        
        <span id="ei">@error('ern'){{$message}}@enderror</span>
        <input type="number" placeholder="{{__('welcome.heading32')}}" name="ern" value="{{$d->en}}"
        class="{{$errors->first('ern')?'ie':''}}">
        
        
        <!-- <select name="semname" >
            <option value="Sem">{{__('welcome.heading33')}}</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        <option value="6">6</option>
    </select> -->
    <span id="ei">@error('semname'){{$message}}@enderror</span>
    <input type="text" name="semname" value="{{$d->semname}}"  class="{{$errors->first('semname')?'ie':''}}">
    <span id="ei">@error('div'){{$message}}@enderror</span>
    <input type="text" placeholder="{{__('welcome.heading34')}}" name="div" value="{{$d->division}}"
     class="{{$errors->first('div')?'ie':''}}">
    <span id="ei">@error('tc'){{$message}}@enderror</span>
    <input type="text" placeholder="{{__('welcome.heading35')}}" name="tc" value="{{$d->complaintdetails}}"
    class="{{$errors->first('tc')?'ie':''}}">

    <!-- <textarea placeholder="{{__('welcome.heading35')}}" name="tc" ></textarea> -->

    <button type="submit">{{__('welcome.heading42')}}</button>

</form>

@endforeach
</body>
</html>