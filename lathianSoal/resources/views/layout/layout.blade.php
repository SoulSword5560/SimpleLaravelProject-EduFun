<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduFun</title>

    <link rel="stylesheet" href="{{asset('bootstrap-5.0.2/css/bootstrap.min.css')}}">
    <style>
        .navbar-nav .nav-link.active {
            text-decoration: underline;
            text-decoration-thickness: 1.5px;
            text-underline-offset: 4px; 
        }
    </style>
</head>
<body style="padding-top: 30px;" class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">EduFun</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is('category*') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($categories as $category)
                                <li>
                                    <a class="dropdown-item" href="{{ url('/category/' . $category->category) }}">
                                        {{ $category->category }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/writers') }}" class="nav-link {{ Request::is('writers*') || Request::is('author*') ? 'active' : '' }}">Writers</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="{{ url('/aboutUs') }}" class="nav-link {{ Request::is('aboutUs') ? 'active' : '' }}">About Us</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="{{ url('/popular') }}" class="nav-link {{ Request::is('popular') ? 'active' : '' }}">Popular</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
    
    <footer class="text-center py-3 border-top mt-4 bg-dark">
        <small class="text-light">© EduFun 2024 | Web Programming | Ciello itanu | 2702242991</small>
    </footer>
    <script src="{{ asset('bootstrap-5.0.2/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>