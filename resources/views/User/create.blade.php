@extends ('layouts.app')

@section('content')

<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{route('user.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="name">User name</label>
            <input value="{{old('name') }}" name="name" type="text" class="form-control" id="name">
            @if($errors->has('name')) 
            <span class="text-danger" > {{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Email</label>
            <input value="{{old('name') }}" name="name" type="email" class="form-control" id="name">
            @if($errors->has('name')) 
            <span class="text-danger" > {{$errors->first('name')}}</span>
            @endif
        </div>


        <div class="form-group">
            <label for="name">Password</label>
            <input value="{{old('name') }}" name="name" type="password" class="form-control" id="name">
            @if($errors->has('name')) 
            <span class="text-danger" > {{$errors->first('name')}}</span>
            @endif
        </div>


        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{route('user.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection