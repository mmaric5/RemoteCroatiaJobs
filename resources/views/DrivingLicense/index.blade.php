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
  @foreach($drivingLicense->items() as $drivingLicense)
<tr>
<td>{{ $drivingLicense->id }}</td>
<td>{{ $drivingLicense->name }}</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection