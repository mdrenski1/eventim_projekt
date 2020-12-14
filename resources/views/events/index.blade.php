@extends('layouts.app')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>

    </tr>
  </thead>

  <tbody>

@foreach ($events->items() as $event)
    <tr>
    <td>{{$event->id}}</td>
    <td>{{$event->event_name}}</td>
    <td>{{$event->event_date}}</td>
    </tr>
@endforeach

  </tbody>
</table>
@endsection