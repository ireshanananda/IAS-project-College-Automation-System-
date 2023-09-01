@extends('layouts.app')

@section('content')


<div class="d-flex flex-wrap  justify-content-center">
@foreach ($subjects as $subject)
<div class="card  bg-Light mb-3 me-2 mt-3" style="max-width: 18rem;">
    <div class="card-header">{{$subject->name}}</div>
    <div class="card-body">

      <p class="card-text">{{$subject->descreption}}</p>


    </div>
    <div class="d-flex justify-content-around pb-1">
        <a href="/user/subject/enroll/{{{$subject->id}}}" type="button" class="btn btn-primary">Enroll</a>

      </div>
  </div>
@endforeach

</div>
@endsection
