@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit user form</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Users</a></li>
                            <li class="breadcrumb-item active">Edit user</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="{{route('admin.user.update',$user->id)}}" class="w-25">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="name">
                                    <input type="text" value="{{$user->name}}" class="form-control" name="name" placeholder="Enter name of user">
                                </label>
                                @error('name')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    <input type="email" value="{{$user->email}}" class="form-control" name="email" placeholder="Enter email of user">
                                </label>
                                @error('email')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                            </div>

                            <div class="form-group">
                                <label for="password">
                                    <input type="password" value="{{$user->password}}" class="form-control" name="password" placeholder="Enter password of user">
                                </label>
                                @error('password')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Roles</label>
                                <select class="select2" name="role"  data-placeholder="Select role" style="width: 100%;">
                                    @foreach($roles as $id => $role)
                                        <option
                                            {{$id === $user->role ? ' selected' : ''}} value="{{$id}}">{{$role}}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <input type="submit" class="btn btn-success" value="Save user">
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
<!-- ./wrapper -->
