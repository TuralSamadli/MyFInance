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
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Message</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                                
                            
                                <tr>

                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->phone }}</td>

                                    <td>{{ $message->email }}</td>
                                    <td><p> {{ $message->message}}</p></td>
                                    <td>   <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                                        <td> <button onclick="" type="button" class="btn waves-effect waves-light btn-danger">Delete</button></td>
                                    </div></td>
                                </tr>
                                @endforeach
      
@endsection