@extends("layout.layout")

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-10"> 
            
            <div class="d-flex align-items-center mb-5 p-3 bg-white rounded shadow-sm">
                <div class="me-3" style="width: 100px; height: 100px; border-radius: 50%; background-color: #f8f9fa; display: flex; align-items: center; justify-content: center; overflow: hidden; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075);">
                    <img src="{{ asset($writer['image']) }}" alt="{{ $writer['name'] }}" class="img-fluid" style="width:100%;">
                </div>
                <div>
                    <h2 class="fw-bold mb-0">{{ $writer['name'] }}</h2>
                    <p class="text-muted fs-5 mb-0">{{ $writer['specialization'] }}</p>
                </div>
            </div>


            @foreach ($articles as $article)
            <div class="card shadow-sm mb-4">
                <div class="row g-0">
                    
                    <div class="col-md-4" style="overflow: hidden;">
                        <img src="{{ $article->image }}" 
                             class="img-fluid rounded-start" 
                             alt="{{ $article->title }}" 
                             style="object-fit: cover; height: 100%; min-height: 200px;">
                    </div>

                    <div class="col-md-8">
                        <div class="card-body d-flex flex-column h-100">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <small class="text-muted">{{ \Carbon\Carbon::parse($article->published_at)->format('d M Y') }} | By {{ $article->author }}</small>
                            <p class="card-text mt-2">{{ $article->excerpt }}</p>
                            
                            <a href="{{ url('/article/' . $article->id) }}" class="btn btn-dark btn-sm mt-auto align-self-end">Read more...</a>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection