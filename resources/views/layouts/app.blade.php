<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Aplikasi')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: url("{{ asset('images/orchid.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            font-family: "Poppins", sans-serif;
            overflow-x: hidden;
        }

        nav.navbar {
            background: rgba(0, 0, 0, 0.4) !important;
            backdrop-filter: blur(8px);
            z-index: 1000;
            position: relative;
        }

        main {
            flex: 1; /* isi ruang kosong antara header dan footer */
            display: flex;
            flex-direction: column;
            justify-content: center; /* biar konten di tengah vertikal */
            align-items: center;
            padding: 20px;
        }

        footer {
            background: rgba(0, 0, 0, 0.4) !important;
            backdrop-filter: blur(8px);
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>
    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Konten utama --}}
    <main>
        <div class="container" style="overflow: visible;">
            @yield('content')
        </div>
    </main>

    {{-- Footer --}}
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
