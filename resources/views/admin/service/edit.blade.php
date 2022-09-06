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
                <h1>Service Edit Page</h1>
                <form method="POST" action="{{route('service.update')}}" class="form-horizontal mt-4">
                    @csrf
                    @foreach ($services as $service)
                        
                    <input type="hidden" value="" name="id_category">
                    <div class="form-group" style="width: 50%">
                        <label>Title</label>
                        <input value="{{$service->title}}" type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Description</label>
                        <input value="{{$service->description}}" type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group" style="width: 50%">
                        <label>Service Name</label>
                        <input value="{{$service->service_name}}" type="text" class="form-control" name="service_name">
                    </div>
                   
                    <div class="form-group" style="width: 50%">
                        <label>Image</label>
                        <input value="{{$service->service_icon}}" type="text" class="form-control" name="service_icon">
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