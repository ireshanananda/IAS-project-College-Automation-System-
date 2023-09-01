@extends('layouts.app')

@section('content')

   <div class="d-flex justify-content-center align-items-center p-4 " style="min-height: 50vh;">

    <div class="d-flex justify-content-center  p-4 " >
    <div class="container p-3  bg-primary" style="max-width: 50%; ">
<h3> {{$subject[0]->name}}</h3>
<br>
<p>
    {{$subject[0]->descreption}}
</p>
<div class="d-flex justify-content-center pb-1">
    <a href="/user/subject/denroll/{{{$subject[0]->id}}}" type="button" class="btn btn-warning">Remove</a>

  </div>
    </div>
    <div class="container p-3  bg-success">

    <h3> Sub Subjects</h3>
    <ul>
@foreach ($childsubs as $item)

    <li>
<h3>{{$item->name}}</h3>
<p> {{$item->description}}</p>
<div class="text-right">
</div>
    </li>


@endforeach
</ul>


    </div>
    </div>

</div>





@endsection
