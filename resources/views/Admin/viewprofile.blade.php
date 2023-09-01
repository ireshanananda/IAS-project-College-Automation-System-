@extends('layouts.dashlayout')
@section('content')

<section style="background-color: #eee; min-height:100vh" >
    <div class="container py-5">

      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="https://static.vecteezy.com/system/resources/previews/007/033/146/original/profile-icon-login-head-icon-vector.jpg" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">{{ $user->name }}</h5>
              <p class="text-muted mb-1">{{ $user->email }}</p>
              <p class="text-muted mb-4">{{ $user->age }} years old</p>
              <div class="d-flex justify-content-center mb-2">

              </div>
            </div>
          </div>



          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fas fa-globe fa-lg text-warning"></i>
                  <p class="mb-0">Enroll for a Subject</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                  <p class="mb-0">Enroll for a Subject</p>
                </li>
                {{-- <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                  <p class="mb-0">@mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                  <p class="mb-0">mdbootstrap</p> --}}
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $user->name }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $user->email }}</p>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Age</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $user->age }}</p>
                </div>
              </div>
            </div>
          </div>

          <h3>Subjects</h3>
          <div class="d-flex flex-wrap">

          @foreach ($subjects as $subject)
          <div class="card  bg-success mb-3 me-3 mt-3 " style="max-width: 18rem;">
              <div class="card-header">{{$subject->name}}</div>
              <div class="card-body">

                <p class="card-text">{{$subject->descreption}}</p>


              </div>
              {{-- <div class="d-flex justify-content-around pb-1">
                  <a href="/admin/subject/view/{{{$subject->id}}}" type="button" class="btn btn-primary">View</a>
                  <a  href="/admin/controller/subject/delete/{{{$subject->id}}}" type="button" class="btn btn-warning" >Delete</a>
                </div> --}}
            </div>
          @endforeach

          </div>


      </div>
    </div>
  </section>



@endsection
