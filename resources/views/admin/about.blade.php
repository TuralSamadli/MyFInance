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
                <h1>About Edit Page</h1>
                <form method="POST" action="{{route('about.update')}}" class="form-horizontal mt-4">
                    @csrf
                    <input type="hidden" value="" name="id_category">
                    <div class="form-group" style="width: 50%">
                        @foreach ($about as $about)
                            
                        <label>Title</label>
                        <input value="{{$about->title}}" type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Description</label>
                        <input value="{{$about->description}}" type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Head</label>
                        <input value="{{$about->head}}" type="text" class="form-control" name="head">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Text</label>
                        <input value="{{$about->text}}" type="text" class="form-control" name="text">
                        <div class="form-group" style="width: 50%">
                            <label>Image</label>
                            <input value="{{$about->icon}}" type="text" class="form-control" name="icon">
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