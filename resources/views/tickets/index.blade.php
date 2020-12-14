@extends('layouts.app')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>

    </tr>
  </thead>

  <tbody>

@foreach ($tickets->items() as $ticket)
    <tr>
    <td>{{$ticket->id}}</td>
    <td>{{$ticket->ticket_price}}</td>
    <td>{{$ticket->ticket_quantity}}</td>
    </tr>
@endforeach

  </tbody>
</table>
@endsection