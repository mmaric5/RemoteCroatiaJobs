@extends('layouts.app')

@php
$loggedInUser = \Auth::user();
@endphp

@section('content')

<div class="mt-5 text-center">
    <div class="btn-group mt-5" role="group">
        <a class="btn btn-secondary" href="{{ route('users.index') }}">Back</a>

        @if($loggedInUser->isAdmin() || $user->id === $loggedInUser->id)
        <a class="btn btn-primary" href="{{ route('users.edit', ['user' => $user]) }}">Edit</a>
        <a class="btn btn-primary" href="{{ route('change_password.edit', ['user' => $user]) }}">Change Password</a>
        @endif

        @if($loggedInUser->isAdmin() || $user->id === $loggedInUser->id)
        <form class="form-inline" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">

            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deactivate</button>
        </form>
        @endif
    </div>