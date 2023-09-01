@extends('layouts.dashlayout')

@section('content')

   <div class="container p-4 " style="min-height: 50vh;">


<h3> {{$subject[0]->name}}</h3>
<br>
<p>
    {{$subject[0]->descreption}}
</p>

<button type="btn" class="btn btn-primary popup-btn">Add New </button>

{{-- note section --}}
    <h4 class="mt-3">Lecture Notes</h4>
    <div class="container p-3" style="background-color: rgb(220, 213, 213)">
        <ul>
@foreach ($childsubs['note'] as $item)



        <li><h5><a href="{{$item->link}}" target="_blank" rel="noopener noreferrer"> {{$item->name}}</h5></a>
<p> {{$item->description}}</p>

<a  href="/admin/controller/childsubject/delete/{{{$item->id}}}" type="button" class="btn btn-danger" >Delete</a></li>



@endforeach
        </ul>
@empty($childsubs['note'])
<h5>Nothing to show.Add some links</h5>

@endempty
</div>

{{--
video section --}}
<h4 class="mt-3">Lecture videos</h4>
<div class="container p-3" style="background-color: rgb(220, 213, 213)">
    <ul>
@foreach ($childsubs['video'] as $item)



    <li><h5><a href="{{$item->link}}" target="_blank" rel="noopener noreferrer"> {{$item->name}}</h5></a>
<p> {{$item->description}}</p>

<a  href="/admin/controller/childsubject/delete/{{{$item->id}}}" type="button" class="btn btn-danger" >Delete</a></li>



@endforeach
    </ul>
@if($childsubs['video']->isEmpty())
<h5>Nothing to show.Add some links</h5>
@endif
</div>


{{-- kuppi videos --}}
<h4 class="mt-3">Kuppi videos</h4>
<div class="container p-3" style="background-color: rgb(220, 213, 213)">
    <ul>
@foreach ($childsubs['kuppi'] as $item)



    <li><h5><a href="{{$item->link}}" target="_blank" rel="noopener noreferrer"> {{$item->name}}</h5></a>
<p> {{$item->description}}</p>

<a  href="/admin/controller/childsubject/delete/{{{$item->id}}}" type="button" class="btn btn-danger" >Delete</a></li>



@endforeach
    </ul>
@if($childsubs['kuppi']->isEmpty())
<h5>Nothing to show.Add some links</h5>
@endif
</div>

{{-- Link section --}}
<h4 class="mt-3">Links</h4>
<div class="container p-3" style="background-color: rgb(220, 213, 213)">
    <ul>
@foreach ($childsubs['link'] as $item)



    <li><h5><a href="{{$item->link}}" target="_blank" rel="noopener noreferrer"> {{$item->name}}</h5></a>
<p> {{$item->description}}</p>

<a  href="/admin/controller/childsubject/delete/{{{$item->id}}}" type="button" class="btn btn-danger" >Delete</a></li>



@endforeach
    </ul>
@if($childsubs['link']->isEmpty())
<h5>Nothing to show.Add some links</h5>
@endif
</div>

{{-- Other resources --}}
<h4 class="mt-3">Other resources</h4>
<div class="container p-3" style="background-color: rgb(220, 213, 213)">
    <ul>
@foreach ($childsubs['other'] as $item)



    <li><h5><a href="{{$item->link}}" target="_blank" rel="noopener noreferrer"> {{$item->name}}</h5></a>
<p> {{$item->description}}</p>

<a  href="/admin/controller/childsubject/delete/{{{$item->id}}}" type="button" class="btn btn-danger" >Delete</a></li>



@endforeach
    </ul>
@if($childsubs['other']->isEmpty())
<h5>Nothing to show.Add some links</h5>
@endif
</div>


@empty($childsubs)
<h3>Nothing to show.Add some resources</h3>

@endempty





</div>


<div class="popup-wrap" id="popup">
    <div class="popup-box">
      <h2 id="title">Add new Resource</h2>
      <form  action="/admin/controller/resource/add" method="post"  class="pl-5 pr-5">
        {{csrf_field()}}

        <div class="form-group" style="display: none;">
            <label for="exampleInputName">Subid</label>
            <input type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" value="{{$subject[0]->id}}" name='id'>
          </div>

        <div class="form_group">
          <label for="exampleInputsemester">Type</label>
          <br>

          <select class="form-select" name="type" aria-label="Default select example">

              <option value="note">Lecture Notes</option>
              <option value="video">Lecture video</option>
              <option value="kuppi">Kuppi video</option>
              <option value="link">Resource Links</option>
              <option value="other">Other resources</option>

            </select>
      </div>


          <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" placeholder="Enter name" name='name'>
          </div>
          <div class="form-group">
            <label for="exampleInputdescription1">description</label>
            <input type="text" class="form-control" id="exampleInputdescription1" placeholder="description" name="description">
          </div>
          <div class="form-group">
            <label for="exampleInputdescription1">Link</label>
            <input type="text" class="form-control" id="exampleInputdescription1" placeholder="description" name="link">
          </div>
          <button type="submit" class="btn btn-primary">create</button>
        </form>

      <a class="close-btn popup-close" href="#">x</a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="{{asset('Js/fadein.js')}}"></script>

@endsection
