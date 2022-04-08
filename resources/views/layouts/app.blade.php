<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/jpg" href="https://i.imgur.com/UyXqJLi.png" />
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <title>{{ $title }}</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body class="bg-gray-300">
    <div>
        <header>
            <div class="bg-yellow-500 text-white text-center fixed inset-x-0 top-0 z-10">
                <div class="container mx-auto grid grid-cols-10 p-3 sm:w-full md:w-5/12">
                    <div class="col-span-2 bg-white rounded-full h-10 w-10 p-1 mr-3 shadow-sm">
                        <a href="">
                            <img src="./img/logo.png" class="inline-block">
                        </a>
                    </div>
                    <div class="col-span-8">
                    </div>
                </div>
            </div>
        </header>
    </div>
    @yield('content')
    <footer>
        pde
    </footer>  
    <script>
        @if(session()->has('success'))
    
        Swal.fire({
            icon: 'success',
            title: 'BERHASIL!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 3000
        })
    
        @elseif(session()->has('error'))
    
        Swal.fire({
            icon: 'error',
            text: 'GAGAL!',
            title: '{{ session('error') }}',
            showConfirmButton: false,
            timer: 3000
        })
    
        @endif
    </script>  
</body>
</html>

