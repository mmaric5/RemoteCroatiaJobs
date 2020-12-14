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
  @foreach($typeofwork->items() as $typeofwork)
<tr>
<td>{{ $typeofwork->id }}</td>
<td>{{ $typeofwork->name }}</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection