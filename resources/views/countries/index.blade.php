@extends('layouts.app')

@section('content')
<a href= "{{ route('countries.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
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
      <a class="btn btn-outline-primary" href="{{ route('countries.show', ['country' => $country->id]) }}">Details</a>
      <a class="btn btn-outline-primary" href="{{ route('countries.edit', ['country' => $country->id]) }}">Edit</a>
    </tr>
@endforeach
  </tbody>
</table>
@endsection