
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
  @foreach($region->items() as $region)
<tr>
<td>{{ $region->id }}</td>
<td>{{ $region->name }}</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection