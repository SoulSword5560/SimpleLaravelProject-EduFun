@extends("layout.layout")

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-10"> 
            
            <h1 class="mb-4">{{ $category }}</h1>

            @foreach ($articles as $article)
            <div class="card shadow-sm mb-4">
                <div class="row g-0">
                    
                    <div class="col-md-4">
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