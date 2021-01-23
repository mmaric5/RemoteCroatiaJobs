@extends('layouts.app')

@section('content')
<div>
<h3 class="mt-3">Driving license detail</h3>
<ul class="list-unstyled">
<li>Name: {{ $drivingLicense->name}}</li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>

@csrf
@method('DELETE')
<button type="submit" onclick="confirm('Are you sure?')" class="btn btn-danger">Delete<button>
</div>