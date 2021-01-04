@extends('layouts.app')

@section('content')
<a href="{{ route('cities.create') }}" class="btn btn-primary mt-5">Add</a>
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
  @foreach($cities->items() as $cities)
<tr>
<td>{{ $cities->id }}</td>
<td>{{ $cities->name }}</td>
<td>
<a class="btn btn-outline-primary" href="{{ route('cities.show', ['cities' => $cities->id]) }}">Details</a>
<a class="btn btn-outline-primary" href="{{ route('cities.edit', ['cities' => $cities->id]) }}">Edit</a>
</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection

