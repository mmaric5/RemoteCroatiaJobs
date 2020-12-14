@extends('layouts.app')

@section('content')
<a href="{{ route('companies.create') }}" class="btn btn-primary mt-5">Add</a>
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
  @foreach($companies->items() as $companies)
<tr>
<td>{{ $companies->id }}</td>
<td>{{ $companies->name }}</td>
<td>{{ $companies->address}}</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection
