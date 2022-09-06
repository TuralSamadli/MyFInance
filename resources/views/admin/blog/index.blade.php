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
                                    
                                    <td> <a href="{{route('blog.edit',$blog->id)}}"> <button    type="button" class="btn waves-effect waves-light btn-warning">Edit</button></a></td>
                                <td> <button onclick="BlogDelete('{{$blog->id}}')" type="button" class="btn waves-effect waves-light btn-danger">Delete</button></td>
                                </tr>
                                @endforeach
      
@endsection        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>
    function BlogDelete(blog) {
        console.log(blog)
        swal({
            title: "Warning",
            text: "Are you sure?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            buttons: ["No", "Yes"],
        })
            .then((willSend) => {
                if (willSend) {
                    $.ajax({
                        url: "{{ route('blog.delete') }}",
                        data: { "_token": "{{ csrf_token() }}", blog:blog },
                        type: "POST",
                        success: function (data) {
                            if(data==="ok"){
                                swal("Success!", "Blog Deleted!", "success");
                                window.setTimeout(function(){location.reload()},2000)
                            }else{
                                swal("Error!", "Blog didn't delete!", "error");
                            }
                        },
                        error: function (x, sts) {
                            console.log("Error...");
                            console.log('no');
                        },
                    });
                } else {
                    swal("Cancelled!");
                }
            });
    }
</script>