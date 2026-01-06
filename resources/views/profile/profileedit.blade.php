<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="prodesigned">


   
    <form action="{{ route('profileUpdate', $about->id) }}", method="post">@csrf 
       <h1 id="heading">Profile</h1> 

       <input id="inputbox" type="text" placeholder="Enter your Surename" name="sureName" value="{{$about->surename}}">
     
       @error('sureName')
    <div class="error">{{ $message }}</div>
@enderror

<br><br>
       <input id="inputbox" type="text" placeholder="Enter your Firstname" name="firstName" value="{{$about->firstname }}">
      
       @error('firstName')
    <div class="error">{{ $message }}</div>
@enderror

<br><br>
       <button id="buttonbox">Submit</button>

    </form>
    </div>
</body>
</html>