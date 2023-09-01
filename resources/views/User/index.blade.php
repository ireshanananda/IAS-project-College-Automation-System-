@extends('layouts.app')
@section('content')

<section style="background-color: #eee; min-height:100vh" >
    <div class="container py-5">

      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="https://media.istockphoto.com/id/1209654046/vector/user-avatar-profile-icon-black-vector-illustration.jpg?s=612x612&w=0&k=20&c=EOYXACjtZmZQ5IsZ0UUp1iNmZ9q2xl1BD1VvN6tZ2UI=" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">{{ Auth::user()->name }}</h5>
              <p class="text-muted mb-1">{{ Auth::user()->email }}</p>
              <p class="text-muted mb-4">{{ Auth::user()->age }} years old</p>
              <div class="d-flex justify-content-center mb-2">

                {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form> --}}

    <button onclick="event.preventDefault();document.getElementById('logout-form').submit();" type="button" class="btn btn-outline-primary ms-1">Logout</button>


              </div>
            </div>
          </div>



          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class=" bg-primary list-group-item d-flex justify-content-between align-items-center p-3 ">
                  <i class="fas fa-globe fa-lg text-warning"></i>
                 <a href="/user/subject" type="button" class="btn btn-primary"><p class="mb-0">Browse Subject</p></a>
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
                  <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Age</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ Auth::user()->age }}</p>
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
              <div class="d-flex justify-content-center pb-1">
                  <a href="/user/subject/view/{{{$subject->id}}}" type="button" class="btn btn-primary">View</a>

                </div>
            </div>
          @endforeach

          </div>


      </div>
    </div>
  </section>



@endsection
