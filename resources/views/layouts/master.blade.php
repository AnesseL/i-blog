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
    <title>{{ config('app.i-blog', 'Home Page - Posts') }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body id="master">
    <header class="py-5">
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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-white"
                            href="{{ url('/about-me') }}">About Me</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-white"
                            href="{{ url('/') }}">All News</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-white"
                            href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="text-center py-5 bg-secondary">
        @yield('content')
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
</body>
</html>
