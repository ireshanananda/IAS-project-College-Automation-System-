<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>CIS</title>
  <link href="{{asset('style/style.css')}}" rel="stylesheet" type="text/css" />

  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>
    @include('components.header');


 <!-- Carousel -->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('image/app4.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/app3.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/app2.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


 <!-- login -->


<div class="row">


      <div class=" content col-sm-2">
        <div class="container card">
      <div class=" card-body">

      <div class="right-side">

        <div class="topic-text">Log in</div>

      <form method="POST" action="{{ route('login') }}">
        @if (!Auth::check())
        @csrf

        <div class="input-box">
          <input type="email" placeholder="Email" name ="email">
        </div>
        <div class="input-box">
          <input type="password" placeholder="password" name ="password">
        </div>


        <div class="button">
          <input class="btn btn-primary" type="submit" value="log in" >
        </div>

<label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container1" style="background-color:#f1f1f1">

    <span class="psw">Forgot <a href="{{ route('password.request') }}">password?</a></span>

  </div>
         <div class="container1" style="background-color:#f1f1f1">

    <span class="psw"> <a href="/register">signup</a></span>

  </div>

  @else
  <h3>You have loged in</h3>

  <a href="/login" class="btn btn-primary"> Dashboard</a>

  @endif
      </form>

    </div>

    </div>
  </div>
  @if (Auth::check())
</div>
@endif
   <!-- Carrer prospects -->

 <div class="col-sm-10">
    <div class=" card1">
      <div class="card-body">
       <h2><b>Career Prospects</b></h2>
<h4><b>BSc Honours (Computing & Information Systems)</b></h4>

<li>Data/ Analysis: Data Administrator,Data Analyst, Data Scientist</li>

<li>Technology/ Security: Cloud Analyst, Network Executive, Security Executive</li>

<li>Development/ Programming: System Administrator, System Analyst, Developer, UI/ UX Designer, Solution Designer, Systems Architect</li>

<li>User Domain: Sales Consultant, Business Analyst, IT/ Digital Consultant</li>


<h4><b>BSc Honours (Software Engineering)</b></h4>
<li>Developer/ Software Engineer</li>

<li>Project Manager</li>

<li>Project Leader/Team Lead</li>

<li>Tester/ Test Engineer</li>

<li>Test Manager</li>

<li>Quality Assurance Lead</li>

<li>Business Analyst/ Requirement Engineer</li>

<li>Computer Programmer</li>

<li>Computer and Information Research Scientist</li>

<li>Computer Hardware Engineer</li>

<li>Computer Support Specialist</li>

<li>Software Quality Assurance Engineer</li>

      </div>
    </div>
  </div>

      </div>







   <!-- footer -->







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
