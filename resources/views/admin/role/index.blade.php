@extends('layouts.adminlayout')

@section('title')
    Roles
@endsection

@section('content')
        <main class="content">
            <div class="card card-body col-md-6 shadow">
                <h3>Roles</h3>
                <table class="table table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th colspan="4" style="text-align: right">
                                <a href="{{route('role.create')}}">
                                    <button class="btn btn-success shadow-sm"><i class="fas fa-plus text-white"></i> Add Role</button>
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{$role->id}}</td>
                                <td>{{$role->name}}</td>
                                <td>
                                    <a href="{{route('role.edit',$role->id)}}">
                                        <button class="btn btn-warning shadow-sm"><i class="fas fa-wrench"></i> Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" onclick="deleteItem({{$role->id}})">
                                        <button class="btn btn-danger shadow-sm"><i class="fas fa-trash"></i> Delete</button>
                                    </a>
                                    <form id="{{$role->id}}" action="{{route('role.destroy',$role->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </main>
@endsection