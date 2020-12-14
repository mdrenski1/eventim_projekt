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

@foreach ($genres->items() as $genre)
    <tr>
    <td>{{$genre->id}}</td>
    <td>{{$genre->type}}</td>
    </tr>
@endforeach

  </tbody>
</table>
@endsection