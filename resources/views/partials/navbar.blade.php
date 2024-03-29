<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="/">Tiny<span style="color: #F9BF3B;">Turbos</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.add') }}">Add Product</a>
                </li>
                @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.signout') }}">Sign out</a>
                    </li>
                @endif
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link sign-in-up" href="{{ route('auth.signin') }}">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sign-in-up" href="{{ route('auth.signup') }}">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
