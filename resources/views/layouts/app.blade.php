<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Aplikasi')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url("{{ asset('images/rusa.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: "Poppins", sans-serif;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            border-radius: 15px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
            color: #fff;
        }
        .btn-custom {
            background-color: #2d5f9c;
            border: none;
            color: #fff;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #244a7c;
        }
        nav.navbar {
            background: rgba(0, 0, 0, 0.4) !important;
            backdrop-filter: blur(8px);
        }
        footer {
            background: rgba(0, 0, 0, 0.4) !important;
            backdrop-filter: blur(8px);
        }
        .content-wrapper {
            flex: 1;
            padding: 30px 15px;
        }
    </style>
</head>
<body>
    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Content --}}
    <div class="content-wrapper container d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            @yield('content')
        </div>
    </div>

    {{-- Footer --}}
    @include('components.footer')
</body>
</html>
