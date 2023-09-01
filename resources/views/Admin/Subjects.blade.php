@extends('layouts.dashlayout')

@section('content')

<div class="d-flex justify-content-between p-4 " >
<h2>Subjects </h2>
<a href="/admin/subject/create" type="button" class="btn btn-primary">Add New</a>
</div>

<div class="d-flex flex-wrap">
@foreach ($subjects as $subject)
<div class="card  bg-Light mb-3 mr-2 mt-3" style="max-width: 18rem;">
    <div class="card-header">{{$subject->name}}</div>
    <div class="card-body">

      <p class="card-text">{{$subject->descreption}}</p>


    </div>
    <div class="d-flex justify-content-around pb-1">
        <a href="/admin/subject/view/{{{$subject->id}}}" type="button" class="btn btn-primary">View</a>
        <a  href="/admin/controller/subject/delete/{{{$subject->id}}}" type="button" class="btn btn-warning" >Delete</a>
      </div>
  </div>
@endforeach

</div>
@endsection
