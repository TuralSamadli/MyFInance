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
                                <th>Service Name</th>
                                <th></th>
                                <th></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                
                            
                                <tr>

                                    <td>{{ $service->title }}</td>
                                    <td>{{ $service->description }}</td>

                                    <td>{{ $service->service_name }}</td>
                                    <td> <a href="{{route('service.edit',$service->id)}}"> <button type="button" class="btn waves-effect waves-light btn-warning">Edit</button></a></td>
                                <td> <button onclick="ServiceDelete('{{$service->id}}')" type="button" class="btn waves-effect waves-light btn-danger">Delete</button></td>
                                </tr>
                                @endforeach
      
@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>
    function ServiceDelete(service) {
        console.log(service)
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
                        url: "{{ route('service.delete') }}",
                        data: { "_token": "{{ csrf_token() }}", service:service},
                        type: "POST",
                        success: function (data) {
                            if(data==="ok"){
                                swal("Success!", "Service Deleted!", "success");
                                window.setTimeout(function(){location.reload()},2000)
                            }else{
                                swal("Error!", "Service didn't delete!", "error");
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