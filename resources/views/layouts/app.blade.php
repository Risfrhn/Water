<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CDN untuk flowbite dan Icon -->
        <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

        <!-- Partikel js -->
        <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>


        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">

        

        <!-- title -->
        <title>Awika Heater || Hangatkan Badanmu</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

        <style>
            body {
                font-family: 'Google Sans', sans-serif;
            }
        </style>
    </head>
    <body class="bg-[#EFF2FB]">
        @if(Auth::check())
            <livewire-navigasi.sidebar/>
        @else
            <livewire-navigasi.navigasi-bar/>
        @endif
        
        {{ $slot }}
        
        @livewireScripts
        
        <footer class="w-full bg-[#4C7BC3] text-white py-10 mt-10">
            <div class="max-w-7xl mx-auto px-4 md:px-10">
                <div class="flex flex-col lg:flex-row lg:justify-between gap-10 lg:gap-0">
                    <div class="lg:w-1/3 flex justify-center lg:justify-start">
                        <img src="{{asset('/logo-no-bg.png')}}" alt="Logo" class="max-w-[150px] h-auto">
                    </div>
                    <div class="lg:w-1/3 flex flex-col items-center lg:items-start">
                        <p class="font-semibold mb-2">Social Media Kami</p>
                        <div class="flex flex-col gap-2 text-sm">
                        <a href="https://wa.link/" target="_blank" class="flex items-center gap-2 text-gray-200 hover:text-yellow-400 transition">
                            <i class="bi bi-whatsapp"></i> Whatsapp
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="flex items-center gap-2 text-gray-200 hover:text-yellow-400 transition">
                            <i class="bi bi-instagram"></i> Instagram
                        </a>
                        <a href="mailto:SemarentCar@gmail.com" class="flex items-center gap-2 text-gray-200 hover:text-yellow-400 transition">
                            <i class="bi bi-envelope-at-fill"></i> SemarentCar@gmail.com
                        </a>
                        </div>
                    </div>
                    <div class="lg:w-1/3 flex justify-center lg:justify-start">
                        <p class="italic text-center lg:text-left text-sm">
                        "Semar Rent Car adalah penyedia jasa rental mobil di Semarang yang melayani
                        sewa mobil lepas kunci dan dengan driver untuk kebutuhan bisnis, wisata,
                        dan keluarga sejak 2008."
                        </p>
                    </div>
                </div>
                
                <!-- Bottom Row -->
                <div class="mt-8 flex flex-col sm:flex-row justify-between items-center text-sm gap-4">
                    <div class="flex items-center gap-2">
                        <i class="bi bi-c-circle"></i>
                        <span>Semar Rent Car</span>
                    </div>
                    <p class="italic text-xs text-center sm:text-right">
                        Layanan jasa penyewaan<br>mobil.
                    </p>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>
