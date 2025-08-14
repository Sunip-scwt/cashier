@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">
                    <a href="{{route('roles.index')}}" class="btn btn-info">Back</a>
                   <p><strong>Name:</strong>{{$role->name}}</p>
                   <h3>Permissions:</h3>
                  @foreach($role->permissions as $permission)
                  <p>{{$permission->name}}</p>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection