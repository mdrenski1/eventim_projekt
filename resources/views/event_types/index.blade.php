@extends('layouts.app')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Type</th>


    </tr>
  </thead>

  <tbody>

@foreach ($event_types->items() as $event_type)
    <tr>
    <td>{{$event_type->id}}</td>
    <td>{{$event_type->event_type}}</td>
    </tr>
@endforeach

  </tbody>
</table>
@endsection