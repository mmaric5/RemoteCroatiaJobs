@extends('layouts.app')

@section('content')
<a href="{{ route('continent.create') }}" class="btn btn-primary mt-5">Add</a>
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
  @foreach($continent->items() as $continent)
<tr>
<td>{{ $continent->id }}</td>
<td>{{ $continent->name }}</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection

