@extends('layouts.app')

@section('content')
<a href="{{ route('ads.create') }}" class="btn btn-primary mt-5">Add</a>
<div class="container">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">CategoryName</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($ads->items() as $ads)
<tr>
<td>{{ $ads->id }}</td>
<td>{{ $ads->name }}</td>
<td>
<a class="btn btn-outline-primary" href="{{ route('ads.show', ['ads' => $ads->id]) }}">Details</a>
<a class="btn btn-outline-primary" href="{{ route('ads.edit', ['ads' => $ads->id]) }}">Edit</a>
</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection
