@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-5">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                @if(session('fail'))
                    <div class="alert alert-danger">
                        {{session('fail')}}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3>User</h3>
                        <a href="{{route('user.index')}}" class="btn btn-success">+ Add User</a>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-hover table-boarded ">
                            <thead>
                            <tr>
                                <th>Sn</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Nationality</th>
                                <th>DOB</th>
                                <th>Education Background</th>
                                <th>Contact By</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key=>$user)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->gender}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->nationality}}</td>
                                    <td>{{$user->date_of_birth}}</td>
                                    <td>{{$user->education_background}}</td>
                                    <td>{{$user->preferred_mode_of_contact}}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{route('user.edit',$user->id)}}"
                                               class="btn btn-warning btn-sm mr-2">Edit</a>
                                            <form action="{{route('user.destroy',$user->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
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
@section('footer')
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                   'csv'
                ]
            });
        });
    </script>

@endsection
