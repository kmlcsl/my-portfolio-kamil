<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - @yield('title')</title>
    @yield('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tambahkan konfigurasi Tailwind untuk warna kustom -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        teal: {
                            400: '#3ABAB4',
                        },
                    }
                }
            }
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Hapus atau komentari baris mix ini karena sudah menggunakan Vite -->
    {{-- <link href="{{ mix('/css/app.css') }}" rel="stylesheet"> --}}
    {{-- <script src="{{ mix('/js/app.js') }}" defer></script> --}}
</head>

<body class="bg-gray-900 text-white font-sans overflow-hidden">
    <div id="preloader" class="fixed inset-0 bg-gray-900 flex items-center justify-center z-[10000]">
        <div class="w-16 h-16 border-4 border-teal-400 border-t-transparent rounded-full animate-spin"></div>
    </div>
    <!-- Include header -->
    @include('layouts.header')

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Include footer -->
    @include('layouts.footer')

    <!-- Include scripts -->
    @include('layouts.scripts')
</body>

</html>
