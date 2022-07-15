@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Users</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Index users</li>
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
                        <a href="{{route('admin.user.create')}}">
                            <button class="btn btn-primary">
                                Add new user
                            </button>
                        </a>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List of users</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th colspan="3" class="text-center">Actions</th>
                                        <th>Created at</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td class="text-center"><a href="{{route('admin.user.show',$user->id)}}"><i class="fa fa-eye"></i></a></td>
                                        <td class="text-center"><a href="{{route('admin.user.edit',$user->id)}}"><i class="fa fa-pen"></i></a></td>
                                        <td class="text-center">
                                            <form action="{{route('admin.user.delete',$user->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-transparent border-0">
                                                    <i class="fa fa-trash text-danger" role="button"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td>{{$user->created_at}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
<!-- ./wrapper -->
