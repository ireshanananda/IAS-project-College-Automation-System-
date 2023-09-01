<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CIS</title>

        <!-- Fonts -->

        <!-- Styles -->

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    </head>
    <body style="padding: 0;margin:0;">

            <div class="bg-image d-flex flex-column  justify-content-center align-items-center"
            style="background-image: url('{{asset("images/bg2.jpg")}}');background-size:cover;
                   height: 100vh; ">

<div class="p-5 d-flex flex-column  justify-content-center align-items-center" style="background-color: coral;">
                <h1>Welcome to SUSL</h1>
<br>
<div class="d-flex justify-contetnt-even " style="width:100">
    @guest
    <a href="/login" class="btn btn-primary me-3">Login</a>
    <a href="/register" class="btn btn-primary">Register</a>
    @else

    <a href="/home" class="btn btn-primary me-3">Home</a>
    @endguest
</div>
</div>

       </div>
    </body>
</html>
