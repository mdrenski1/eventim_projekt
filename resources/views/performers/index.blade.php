@extends('layouts.app')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Ime</th>
      <th scope="col">Prezime</th>
      <th scope="col">Nadimak</th>

    </tr>
  </thead>

  <tbody>

@foreach ($performers->items() as $performer)
    <tr>
    <td>{{$performer->id}}</td>
    <td>{{$performer->first_name}}</td>
    <td>{{$performer->last_name}}</td>
    <td>{{$performer->stage_name}}</td>
    </tr>
@endforeach

  </tbody>
</table>
@endsection