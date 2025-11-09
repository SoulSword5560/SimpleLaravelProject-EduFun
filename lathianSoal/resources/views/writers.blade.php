@extends("layout.layout")

@section('content')
<div class="container mt-4">
    <h1 class="fw-bold mb-5">Our Writers:</h1>

    <div class="row text-center" style="padding-top: 10px;">
       @foreach ($writers as $id => $writer)
        <div class="col-md-4 mb-4">
           
            <div class="mb-3" style="
                width: 200px; 
                height: 200px; 
                margin: 0 auto; 
                border-radius: 50%; 
                background-color: #f8f9fa; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
                box-shadow: 0 .125rem .25rem rgba(0,0,0,.075);
                overflow: hidden;
            ">
                <img src="{{ asset($writer['image']) }}" 
                    alt="{{ $writer['name'] }}" 
                    class="img-fluid" 
                    style="width:100%; height;100% object-fit: cover;">
            </div>
            
            <h4 class="fw-bold mt-4">
                <a href="{{ url('/author/' . $id) }}" class="text-decoration-none text-dark">
                    {{ $writer['name'] }}
                </a>
            </h4>
            <p class="text-muted">{{ $writer['specialization'] }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection