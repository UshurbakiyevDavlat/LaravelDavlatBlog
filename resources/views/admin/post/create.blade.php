@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create post form</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Create post</li>
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
                        <form method="post" action="{{route('admin.post.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">
                                    <input type="text" class="form-control" name="title" value="{{old('title')}}"
                                           placeholder="Enter title of post">
                                </label>
                                @error('title')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="summernote">
                                    <textarea id="summernote" name="content">{{old('content')}}</textarea>
                                </label>
                                @error('content')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Preview image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="previewImage" name="preview_image">
                                        <label class="custom-file-label" for="previewImage">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                @error('preview_image')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="mainImage">Main image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="mainImage" name="main_image">
                                        <label class="custom-file-label" for="mainImage">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-success" value="Save post">
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
