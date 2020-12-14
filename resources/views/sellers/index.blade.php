@extends('layouts.app')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">IBAN</th>
      <th scope="col">SWIFT</th>

    </tr>
  </thead>

  <tbody>

@foreach ($sellers->items() as $seller)
    <tr>
    <td>{{$seller->id}}</td>
    <td>{{$seller->seller_name}}</td>
    <td>{{$seller->IBAN}}</td>
    <td>{{$seller->SWIFT}}</td>
    </tr>
@endforeach

  </tbody>
</table>
@endsection