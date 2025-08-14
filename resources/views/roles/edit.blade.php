@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Roles') }}</div>

                <div class="card-body">
                    <a href="{{route('roles.index')}}" class="btn btn-info">Back</a>
                    <form method="post" action="{{route('roles.update',$role->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Name</label>
                            <input type="text" name="name" id="disabledTextInput" class="form-control" placeholder="Name" value="{{$role->name}}">
                            @error('name')
                            <span class="text-danger">$message</span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <h3>Permissions:</h3>
                            @foreach($permissions as $permission)
                            <label for=""><input type="checkbox" name="permissions[ {{$permission->name}}]" value="{{$permission->name}}" {{$role->hasPermissionTo($permission->name)?'checked':''}} id="">{{$permission->name}}</label><br>
                            @endforeach
                        </div>
                            
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection