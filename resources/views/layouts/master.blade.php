<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Simple I-Blog" />
    <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap 5, PHP, OOP, Laravel 9" />
    <meta name="author" content="Agnieszka Leśków" mail="agnieszkaleskow@gmail.com" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>{{ config('app.i-blog', 'Home Page - Posts') }}</title> --}}
    {{-- <title>@yield('app.i-blog', 'Home Page - Posts')</title> --}}
    <title>@yield('title')</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body id="master">
    <header class="py-4">
        <nav id="mainNav" class="navbar navbar-expand-lg navbar-light bg-primary shadow-sm text-uppercase fixed-top">
            <div class="container">
                <a class="navbar-brand text-white font-weight-bold bg-primary text-white rounded" href="{{ url('/') }}">
                    {{ config('app.i-blog', 'I-Blog') }}
                </a>
                <button class="navbar-toggler text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a href="{{ url('/about-me') }}" class="nav-link py-3 px-0 px-lg-3 rounded text-white {{ (request()->routeIs('pages.about')) ? ' active text-decoration-underline' : '' }}" {{ (request()->routeIs('pages.about')) ? ' aria-current=page' : '' }}>
                             About Me  
                            </a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a href="{{ url('/') }}" class="nav-link py-3 px-0 px-lg-3 rounded text-white {{ (request()->routeIs('posts.posts')) ? ' active text-decoration-underline' : '' }}" {{ (request()->routeIs('posts.posts')) ? ' aria-current=page' : '' }}>
                            All News
                            </a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a href="{{ url('/contact') }}" class="nav-link py-3 px-0 px-lg-3 rounded text-white {{ (request()->routeIs('pages.contact')) ? ' active text-decoration-underline' : '' }} {{ (request()->routeIs('pages.contact')) ? ' aria-current=page' : '' }}">
                            Contact
                            </a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            @auth
                            <a href="#logout" class="nav-link py-3 px-0 px-lg-3 rounded text-white">
                            Log out
                            </a>                              
                            @else
                            <a href="{{ route('account.login')}}" class="nav-link py-3 px-0 px-lg-3 rounded text-white {{ (request()->routeIs('account.login')) ? ' active text-decoration-underline' : '' }} {{ (request()->routeIs('account.login')) ? ' aria-current=page' : '' }}">
                            Sign in
                            </a>
                            @endauth
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a href="{{ route('admin.post.create')}}" class="nav-link py-3 px-0 px-lg-3 rounded text-white {{ (request()->routeIs('admin.post.create')) ? ' active text-decoration-underline' : '' }} {{ (request()->routeIs('admin.post.create')) ? ' aria-current=page' : '' }}">
                                Create new post
                            </a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a href="{{ route('account.register')}}" class="nav-link py-3 px-0 px-lg-3 rounded text-white {{ (request()->routeIs('account.register')) ? ' active text-decoration-underline' : '' }} {{ (request()->routeIs('account.register')) ? ' aria-current=page' : '' }}">
                            Register
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="py-5 bg-secondary">
        <div class="container">
            @include('partials.message')
            @yield('content')
        </div>
    </main>
   <footer class="bg-primary py-5">
        <section class="container row m-auto text-center">
            <div class="footer-contact col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">
                    <p class="lead mb-0">
                     <a href="{{ url('/contact') }}" class="nav-link text-white py-1">
                        We Invite You To Contact Me!
                        </a>
                        <a href="{{ url('/') }}" class="nav-link text-uppercase py-1">
                        I-BLOG
                        </a>
                    </p>
                </h4>
            </div>
            <div class="footer-links col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">
                    Links
                </h4>
                <a href="{{ url('/') }}" class="nav-link text-white py-1">
                    All News
                </a>
                <a href="{{ url('/about-me') }}" class="nav-link text-white py-1">
                    About Me
                </a>
                <a href="{{ url('/contact') }}" class="nav-link text-white py-1">
                    Contact
                </a>
            </div>
            <div class="footer-about-text col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">
                    About the project
                </h4>
                <p class="lead mb-0 text-white text-uppercase">
                    I-Blog Demonstration project.
                </p>
            </div>
        </section>
        <section class="copyright d-flex justify-content-center mt-5">
            <p class="me-3">&copy; {{ date('Y-m-d') }} 
                <a href="{{ route('posts.posts') }}" class="text-decoration-none"> I-Blog </a>
            </p>
            <p>Laravel v {{ Illuminate\Foundation\Application::VERSION }} (PHP v {{ PHP_VERSION }})</p>
        </section>
   </footer>
@auth
<form action="{{ route('account.logout') }}" method="POST" id="formlogout">
@csrf
</form>
<script>
    document.querySelector("a[href='#logout']").addEventListener('click', function(event){
    event.preventDefault();
    document.getElementById('formlogout').submit();
}, false);
</script>
@endauth
</body>
</html>
