@extends('layouts.app')

@section('content')
<div>
<h3 class="mt-3">Country detail</h3>
<ul class="list-unstyled">
<li>Name: {{ $country->name}}</li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
</div>