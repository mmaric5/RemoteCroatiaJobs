@extends ('layouts.app')

@section('content')

<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{route('ads.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="name">Ad name</label>
            <input value="{{old('name') }}" name="name" type="text" class="form-control" id="name">
            @if($errors->has('name')) 
            <span class="text-danger" > {{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Conditions</label>
            <input value="{{old('name') }}" name="conditions" type="text" class="form-control" id="name">
            @if($errors->has('name')) 
            <span class="text-danger" > {{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">What do we offer</label>
            <input value="{{old('name') }}" name="whatDoWeOffer" type="text" class="form-control" id="name">
            @if($errors->has('name')) 
            <span class="text-danger" > {{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Link for application</label>
            <input value="{{old('name') }}" name="LinkForApplication" type="text" class="form-control" id="name">
            @if($errors->has('name')) 
            <span class="text-danger" > {{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Work from home</label>
            <input value="{{old('name') }}" name="WorkFromHome" type="text" class="form-control" id="name">
            @if($errors->has('name')) 
            <span class="text-danger" > {{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Description</label>
            <input value="{{old('name') }}" name="description" type="text" class="form-control" id="name">
            @if($errors->has('name')) 
            <span class="text-danger" > {{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Category</label>
            <input value="{{old('name') }}" name="category" type="text" class="form-control" id="name">
            @if($errors->has('name')) 
            <span class="text-danger" > {{$errors->first('name')}}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{route('ads.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection