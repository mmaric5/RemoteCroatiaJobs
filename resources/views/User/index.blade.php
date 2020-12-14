
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
  @foreach($user->items() as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection