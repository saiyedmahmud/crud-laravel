@extends('welcome')
@section('content')
    


<div class='container'>
<table class="table m-4">
    <thead class='table-dark'>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Section</th>
        <th scope="col">Gender</th>
        <th scope="col">Delete</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($student as $item)
            
        
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->section}}</td>
        <td>{{$item->gender}}</td>
        <td><a href="{{url("/delete")}}/{{$item->id}}" class='btn btn-danger'>delete</a></td>
        <td><a href="{{url("/edit")}}/{{$item->id}}" class='btn btn-info'>Edit</a></td>
      </tr>
      @endforeach
    </tbody>
  </table> 
</div>   
@endsection