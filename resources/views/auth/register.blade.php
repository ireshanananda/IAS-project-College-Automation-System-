<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>CIS</title>
  <link href="{{asset('style/signup.css')}}" rel="stylesheet" type="text/css" />

  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

   @include('components.header');


 <div class="container">
    <div class="content">

      <div class="right-side">
        <div class="topic-text">Create a new account</div>

{{-- Form section --}}

      <form action="{{ route('register') }}" method="POST">
        @csrf


        <div class="input-box">
            <input type="text" placeholder="Username" name="name">
            @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
          </div>
        <div class="input-box">
          <input type="text" placeholder="Age:" name="age">
          @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>

        <div class="input-box">
          <input type="text" placeholder=" Email" name="email">
          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="input-box">
          <input type="password" placeholder="Password" name="password">
          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="input-box">
          <input type="password" id="password-confirm"  placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password">
        </div>
         <label>
      <input type="checkbox" checked="checked" name="remember"> I agree to the terms of service and privacy policy
    </label>
        <div class="input-box message-box">

        </div>


        <div class="button">
          <input type="submit" class="btn btn-primary" value="Signup" >
        </div>
      </form>
    </div>
    </div>
  </div>

<div class = "num">
<center><h5><b>Dean/ Faculty of Applied Sciences</b></h5>
Phone: 045-3454212

Email: dean@appsc.sab.ac.lk

<h5><b>Head/ Department of Computing & Information Systems</b></h5>
Phone: 045-3454519

Email: cis@appsc.sab.ac.lk

<h5><b>Assistant Registrar/ Faculty of Applied Sciences</b></h5>
Phone: 045-3454213

Email: ar@appsc.sab.ac.lk</center>

</div>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<!--footer starts from here-->
@include('components.footer')

  <script src="script.js"></script>
</body>

</html>
