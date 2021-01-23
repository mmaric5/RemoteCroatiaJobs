@extends('layouts.app')

@section('content')
<a href="{{ route('drivingLicenses.create') }}" class="btn btn-primary mt-5">Add</a>
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
  @foreach($drivingLicense->items() as $drivingLicense)
<tr>
<td>{{ $drivingLicense->id }}</td>
<td>{{ $drivingLicense->name }}</td>
<td>
<a class="btn btn-outline-primary" href="{{ route('drivingLicenses.show', ['drivingLicense' => $drivingLicense->id]) }}">Details</a>
<a class="btn btn-outline-primary" href="{{ route('drivingLicenses.edit', ['drivingLicense' => $drivingLicense->id]) }}">Edit</a>
</td>
</tr>
@endforeach
  </tbody>
</table>
</div>
@endsection