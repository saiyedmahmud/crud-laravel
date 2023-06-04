@extends('welcome')
@section('content')
<div class="container">
  <div class='container'> <h3>{{$title}}</h3> </div>
  <form method="POST" action="{{$url}}" class="row g-3">
    @csrf
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" value="{{$student->name}}">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Section</label>
      <input type="text" name='section'  class="form-control" id="inputAddress" value="{{$student->section}}">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Gender</label>
      <input type="text" name='gender' class="form-control" id="inputAddress2" value="{{$student->gender}}">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </form>
</div>
@endsection