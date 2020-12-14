
@extends('layouts.app')

@section('content')
<a href="{{ route('country.create') }}" class="btn btn-primary mt-5">Add</a>
<div class="container">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">CitiesName</th>
      <th>Actions</th>
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
