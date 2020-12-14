@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">CategoryName</th>
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
