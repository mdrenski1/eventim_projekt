@extends('layouts.app')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
@foreach ($countries->items() as $country)
    <tr>
    <td>{{$country->id}}</td>
    <td>{{$country->name}}</td>
    <td>
      <a class="btn btn-outline-primary" href="">Details</a>
      <a class="btn btn-outline-primary" href="">Edit</a>
    </tr>
@endforeach
  </tbody>
</table>
@endsection