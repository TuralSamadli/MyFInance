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
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Poster</th>
                                <th>Date</th>
                                <th></th>
                                <th></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                
                            
                                <tr>

                                    <td>{{ $blog->blog_title }}</td>
                                    <td>{{ $blog->blog_description }}</td>

                                    <td>{{ $blog->blog_poster }}</td>
                                    <td><p> {{ $blog->date}}</p></td>
                                    
                                    <td> <a href="{{route('blog.edit')}}"> <button    type="button" class="btn waves-effect waves-light btn-warning">Edit</button></a></td>
                                <td> <button type="button" class="btn waves-effect waves-light btn-danger">Delete</button></td>
                                </tr>
                                @endforeach
      
@endsection