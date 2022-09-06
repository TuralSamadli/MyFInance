@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="col-sm-12">
            <div class="card card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1>Blog Edit Page</h1>
                <form method="POST" action="{{route('blog.update')}}" class="form-horizontal mt-4">
                    @csrf
                    @foreach ($blogs as $blog)
                        
                    
                    <input type="hidden" value="" name="id_category">
                    <div class="form-group" style="width: 50%">
                        <label>Title</label>
                        <input value="{{$blog->blog_title}}" type="text" class="form-control" name="blog_title">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Description</label>
                        <input value="{{$blog->blog_description}}" type="text" class="form-control" name="blog_description">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Poster</label>
                        <input value="{{$blog->blog_poster}}" type="text" class="form-control" name="blog_poster">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Date</label>
                        <input value="{{$blog->date}}" type="text" class="form-control" name="date">
                        <div class="form-group" style="width: 50%">
                            <label>Image</label>
                            <input value="{{$blog->blog_icon}}" type="text" class="form-control" name="blog_icon">
                        </div>

                    <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                        <button type="submit" class="btn waves-effect waves-light btn-success">Edit</button>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
@endsection