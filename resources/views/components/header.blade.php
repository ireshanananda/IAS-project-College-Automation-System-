@foreach ($errors->all() as $error)
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{ $error }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endforeach
<div class="row">
<div class="col-sm-2">
<div class="card">
  <div class="card-body">
    <img src="{{asset('image/logo1.png')}}" class="card-img-top" alt="...">

  </div>
</div>
</div>
<div class="col-sm-8">
<div class="card">
  <div class="card-body">
   <b><center> <h3 class="card-title">Sabaragamuwa University of Sri Lanka
</h3>
    <h3><p class="card-text">Department Of Computing & Information Systems</p></h3></center></b>

  </div>
</div>
</div>
<div class="col-sm-2">
<div class="card">
  <div class="card-body">
     <img src="{{asset('image/cis.jpg')}}" class="card-img-top" alt="...">

  </div>
</div>
</div>
</div>


