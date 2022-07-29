@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit comment form</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('personal.comment.index')}}">Comment</a></li>
                            <li class="breadcrumb-item active">Edit comment</li>
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
                        <form method="post" action="{{route('personal.comment.update',$comment->id)}}" class="w-25">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="comment">
                                    <input type="text" class="form-control"
                                           name="comment"
                                           placeholder="Enter edited comment"
                                           value="{{$comment->comment}}">
                                </label>
                            </div>
                            @error('comment')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <input type="submit" class="btn btn-success" value="Save comment">
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
