<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

    
</head>

<body>

    <div class="container-fluid bg-light mb-5">
        <div class="container">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a wire:navigate class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a wire:navigate class="nav-link" href="{{ route('books.index') }}" wire:current="text-danger" >Books</a>
                            </li>
                            <li class="nav-item">
                                <a wire:navigate class="nav-link" href="{{ route('books.create') }}" wire:current="text-danger" >Add Books</a>
                            </li>
                            
                        </ul>
                        
                    </div>
                </nav>
            </div>
        </div>
    </div>
    

    {{ $slot }}

    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>