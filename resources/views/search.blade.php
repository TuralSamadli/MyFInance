

<div>
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">HomePage</a></li>
        <li><a href="#">Services</a></li>
        @foreach ($services as $service)
            
        <li class="active">{{ $service->service_name }}</li>
    </ol>
    <div class="bg-content">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ $service->service_icon }}">
                <hr>
            </div>
        </div>
            @endforeach


