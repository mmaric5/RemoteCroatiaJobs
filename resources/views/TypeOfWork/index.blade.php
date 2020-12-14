@extends('layouts.app')

@section('content')


<a href="{{ route('typeOfWorks.create') }}" class="btn btn-primary mt-5">Add</a>
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
  @foreach($typeofwork->items() as $typeofwork)
<tr>
<td>{{ $typeofwork->id }}</td>
<td>{{ $typeofwork->name }}</td>
<td>
<a class="btn btn-outline-primary" href="{{ route('typeOfWorks.show', ['typeOfWorks' => $typeOfWorks->id]) }}">Details</a>
<a class="btn btn-outline-primary" href="{{ route('typeOfWorks.edit', ['typeOfWorks' => $typeOfWorks->id]) }}">Edit</a>
</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection