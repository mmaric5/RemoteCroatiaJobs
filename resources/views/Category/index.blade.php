@extends('layouts.app')

@section('content')
<a href="{{ route('category.create') }}" class="btn btn-primary mt-5">Add</a>
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
  @foreach($category->items() as $category)
<tr>
<td>{{ $category->id }}</td>
<td>{{ $category->name }}</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection
