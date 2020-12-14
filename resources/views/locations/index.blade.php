@extends('layouts.app')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Location_Name</th>

    </tr>
  </thead>

  <tbody>

@foreach ($locations->items() as $location)
    <tr>
    <td>{{$location->id}}</td>
    <td>{{$location->location_name}}</td>
    </tr>
@endforeach

  </tbody>
</table>
@endsection