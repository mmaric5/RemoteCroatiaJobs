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
  @foreach($cities->items() as $cities)
<tr>
<td>{{ $cities->id }}</td>
<td>{{ $cities->name }}</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection

