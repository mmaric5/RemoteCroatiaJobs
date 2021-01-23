
@extends('layouts.app')

@section('content')
<a href="{{ route('regions.create') }}" class="btn btn-primary mt-5">Add</a>
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
  @foreach($region->items() as $region)
<tr>
<td>{{ $region->id }}</td>
<td>{{ $region->name }}</td>
<td>
<a class="btn btn-outline-primary" href="{{ route('regions.show', ['region' => $region->id]) }}">Details</a>
<a class="btn btn-outline-primary" href="{{ route('regions.edit', ['region' => $region->id]) }}">Edit</a>
</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection