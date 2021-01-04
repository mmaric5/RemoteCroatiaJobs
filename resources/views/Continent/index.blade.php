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
<td>
<a class="btn btn-outline-primary" href="{{ route('continent.show', ['continent' => $continent->id]) }}">Details</a>
<a class="btn btn-outline-primary" href="{{ route('continent.edit', ['continent' => $continent->id]) }}">Edit</a>
</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection

