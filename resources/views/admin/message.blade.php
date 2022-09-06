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
                                        <td> <button onclick="MessageDelete('{{$message->id}}')" type="button" class="btn waves-effect waves-light btn-danger">Delete</button></td>
                                    </div></td>
                                </tr>
                                @endforeach
      
@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>
    function MessageDelete(message) {
        console.log(message)
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
                        url: "{{ route('message.delete') }}",
                        data: { "_token": "{{ csrf_token() }}", message:message },
                        type: "POST",
                        success: function (data) {
                            if(data==="ok"){
                                swal("Success!", "Message Deleted!", "success");
                                window.setTimeout(function(){location.reload()},2000)
                            }else{
                                swal("Error!", "Message didn't delete!", "error");
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