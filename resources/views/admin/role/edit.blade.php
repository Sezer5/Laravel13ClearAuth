@extends('layouts.adminlayout')

@section('title')
    Roles
@endsection

@section('content')
        <main class="content">
            <div class="card card-body col-md-6">
                <h3>Roles</h3>
                <table class="table table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{route('role.update',$role->id)}}" method="POST">
                            @csrf
                            @method("PUT")
                            <tr>
                                <td>
                                    <input type="text"  name="name" class="form-control" value="{{$role->name}}" required>
                                </td>
                                <td>
                                    <button class="btn btn-success shadow-sm"><i class="fas fa-refresh text-white"></i> Update</button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
            
        </main>
@endsection