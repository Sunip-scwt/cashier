@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">
                    <a href="{{route('users.index')}}" class="btn btn-info">Back</a>
                    <form method="post" action="{{route('users.store')}}">
                        @csrf
                       
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Name</label>
                            <input type="text" name="name" id="disabledTextInput" class="form-control" placeholder="Name">
                            @error('name')
                            <span class="text-danger">$message</span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Email</label>
                            <input type="email" name="email" id="disabledTextInput" class="form-control" placeholder="Email">
                            @error('email')
                            <span class="text-danger">$message</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Password</label>
                            <input type="password" name="password" id="disabledTextInput" class="form-control" placeholder="Password">
                            @error('password')
                            <span class="text-danger">$message</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Roles:</label>
                            <select name="roles[]" id="" class="form-select" multiple>
                                <option value="">Select Role</option>
                                @foreach($roles as $role)
                                <option value="{{$role->name}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection