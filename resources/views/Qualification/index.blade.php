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
  @foreach($qualification->items() as $qualification)
<tr>
<td>{{ $qualification->id }}</td>
<td>{{ $qualification->name }}</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection

