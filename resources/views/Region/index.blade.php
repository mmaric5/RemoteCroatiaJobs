
@extends('layouts.app')

@section('content')
<a href="{{ route('region.create') }}" class="btn btn-primary mt-5">Add</a>
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
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection