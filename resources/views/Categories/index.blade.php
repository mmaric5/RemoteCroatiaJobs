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
<td>
<a class="btn btn-outline-primary" href="{{ route('category.show', ['category' => $category->id]) }}">Details</a>
<a class="btn btn-outline-primary" href="{{ route('category.edit', ['category' => $category->id]) }}">Edit</a>
</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection
