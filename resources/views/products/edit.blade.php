@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Product') }}</div>

                <div class="card-body">
                    <a href="{{route('products.index')}}" class="btn btn-info">Back</a>
                    <form method="post" action="{{route('products.update',$product->id)}}">
                        @csrf
                       @method('PUT')
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Name</label>
                            <input type="text" name="name" id="disabledTextInput" class="form-control" placeholder="Name" value="{{$product->name}}">
                            @error('name')
                            <span class="text-danger">$message</span>
                            @enderror

                        </div>
                       

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection