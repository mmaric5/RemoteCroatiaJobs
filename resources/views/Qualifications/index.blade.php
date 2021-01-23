@extends('layouts.app')

@section('content')
<a href="{{ route('qualifications.create') }}" class="btn btn-primary mt-5">Add</a>
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
  @foreach($qualification->items() as $qualification)
<tr>
<td>{{ $qualification->id }}</td>
<td>{{ $qualification->name }}</td>
<td>
<a class="btn btn-outline-primary" href="{{ route('qualifications.show', ['qualification' => $qualification->id]) }}">Details</a>
<a class="btn btn-outline-primary" href="{{ route('qualifications.edit', ['qualification' => $qualification->id]) }}">Edit</a>
</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection

