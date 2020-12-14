@extends('layouts.app')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Ime</th>
      <th scope="col">Prezime</th>
      <th scope="col">Mail</th>

    </tr>
  </thead>

  <tbody>

@foreach ($users->items() as $user)
    <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->first_name}}</td>
    <td>{{$user->last_name}}</td>
    <td>{{$user->email}}</td>
    </tr>
@endforeach

  </tbody>
</table>
@endsection