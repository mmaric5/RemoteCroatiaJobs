
@extends('layouts.app')

@section('content')
<a href="{{ route('language.create') }}" class="btn btn-primary mt-5">Add</a>

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
  @foreach($language->items() as $language)
<tr>
<td>{{ $language->id }}</td>
<td>{{ $language->name }}</td>
<td>
<a class="btn btn-outline-primary" href="{{ route('language.show', ['language' => $language->id]) }}">Details</a>
<a class="btn btn-outline-primary" href="{{ route('language.edit', ['language' => $language->id]) }}">Edit</a>
</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection
