<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <img class="img-fluid" src="{{asset('app-assets/img/logo.png')}}" alt="Logo">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ url('/') }}" >Home</a>
                    <a class="nav-item nav-link {{ (request()->is('about')) ? 'active' : '' }}" href="{{ url('about') }}">About</a>
                    
                    <a href="{{ url('products') }}" class="nav-item nav-link {{ (request()->is('products')) ? 'active' : '' }}">Products</a>
                    <a href="{{ url('store') }}" class="nav-item nav-link {{ (request()->is('store')) ? 'active' : '' }}">Store</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light rounded-0 m-0">
                            <a href="{{ url('features')}}" class="dropdown-item {{ (request()->is('features')) ? 'active' : '' }}">Features</a>
                            <a href="{{ url('blog-article')}}" class="dropdown-item {{ (request()->is('blog-article')) ? 'active' : '' }}">Blog Article</a>
                            <a href="{{ url('testimonial')}}" class="dropdown-item {{ (request()->is('testimonial')) ? 'active' : '' }}">Testimonial</a>
                            <a href="{{ url('404')}}" class="dropdown-item {{ (request()->is('404')) ? 'active' : '' }}">404 Page</a>
                        </div>
                    </div>
                    <a href="{{ url('contact')}}" class="nav-item nav-link {{ (request()->is('contact')) ? 'active' : '' }}">Contact</a>
                </div>
                <div class="border-start ps-4 d-none d-lg-block">
                    <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </nav>
    </div>
</div>