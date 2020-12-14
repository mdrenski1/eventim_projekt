@extends('layouts.app')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
@foreach ($countries->items() as $country)
    <tr>
    <td>{{$country->id}}</td>
    <td>{{$country->name}}</td>
    </tr>
@endforeach
  </tbody>
</table>
@endsection