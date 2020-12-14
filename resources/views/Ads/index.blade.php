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
  @foreach($ads->items() as $ads)
<tr>
<td>{{ $ads->id }}</td>
<td>{{ $ads->name }}</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection
