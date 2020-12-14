@extends('layouts.app')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Number</th>
      <th scope="col">Fiscal Number</th>
      <th scope="col">Date Out</th>

    </tr>
  </thead>

  <tbody>

@foreach ($invoices->items() as $invoice)
    <tr>
    <td>{{$invoice->id}}</td>
    <td>{{$invoice->number}}</td>
    <td>{{$invoice->fiscal_number}}</td>
    <td>{{$invoice->date_out}}</td>
    </tr>
@endforeach

  </tbody>
</table>
@endsection