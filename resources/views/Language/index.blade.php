
@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">CitiesName</th>
    </tr>
  </thead>
  <tbody>
  @foreach($language->items() as $language)
<tr>
<td>{{ $language->id }}</td>
<td>{{ $language->name }}</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection
