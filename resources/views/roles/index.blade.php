@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Roles') }}</div>

                <div class="card-body">
                    @session('success')
                    <div class="alert alert-success">
                        {{$value}}
                    </div>
                    @endsession
                    <a href="{{route('roles.create')}}" class="btn btn-success mb-3">Create Roles</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>{{$role->id}}</td>
                                <td>{{$role->name}}</td>

                                <td>
                                    <form action="{{route('roles.destroy',$role->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('roles.show',$role->id)}}" class="btn btn-info btn-sm">Show</a>
                                        <a href="{{route('roles.edit',$role->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-sm">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection