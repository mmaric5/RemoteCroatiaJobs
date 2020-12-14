
@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">CitiesName</th>
    </tr>
  </thead>
  <tbody>
  @foreach($country->items() as $country)
<tr>
<td>{{ $country->id }}</td>
<td>{{ $country->name }}</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection
