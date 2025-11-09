@extends("layout.layout")

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <img src="{{ $article->image }}" class="img-fluid rounded shadow-sm mb-4 w-100" alt="{{ $article->title }}">

            <h1 class="fw-bold mb-3">{{ $article->title }}</h1>

            <p class="text-muted">{{ \Carbon\Carbon::parse($article->published_at)->format('d M Y') }} | By: {{ $article->author }}</p>

            <div class="article-content mt-4" style="font-size: 1.1rem; line-height: 1.7;">
                {!! nl2br(e($article->content)) !!}
            </div>

        </div>
    </div>
</div>
@endsection