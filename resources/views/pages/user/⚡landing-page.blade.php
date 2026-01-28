<?php

use Livewire\Component;

new class extends Component
{
    
};
?>

<div>
    <div class="w-full mt-30">  
        <div class="relative container mx-auto px-20 pt-5 relative z-10">
            <livewire-animasi.uap/>
            <div class="grid grid-cols-12">
                <div class="col-span-6 content-center">
                    <div class="flex flex-row content-center">
                        <div class="py-1 ps-1 pe-5 bg-[#FFFFFF] rounded-full">
                            <div class="flex flex-row gap-3 text-xs">
                                <div class="py-1 px-3 bg-[#4C7BC3] text-white rounded-full">
                                    Baru
                                </div>
                                <p class="content-center">Water Heater Modern</p>
                            </div>
                        </div>
                    </div>

                    <p class="text-5xl font-extrabold my-5" style="line-height: 1.1">Solusi Air Panas Praktis <br>untuk Setiap Hari</p>
                    <p class="text-sm font text-gray-600" style="line-height: 2">Nikmati air panas instan dengan water heater hemat energi, aman digunakan,<br> dan tahan lama untuk kebutuhan rumah Anda.</p>

                    <div class="flex flex-row gap-2 mt-5 mb-2">
                        <livewire-button.button-variant-3 type="#" judul="Ubah Dahsboard" warna="bg-[#4C7BC3]" borderButton="border-2 border-[#4C7BC3]"/>
                        <livewire-button.button-variant-3 type="#" judul="Ubah Dahsboard" borderButton="border-2 border-[#4C7BC3]" warna="bg-transparent" warnaTulisan="[#4C7BC3]" />
                    </div>
                    <div class="flex flex-row mt-5">
                        <img src="{{asset('/Gambar_default.jpg')}}" alt="" class="w-8 rounded-full">
                        <img src="{{asset('/Gambar_default.jpg')}}" alt="" class="w-8 rounded-full -ms-2">
                        <img src="{{asset('/Gambar_default.jpg')}}" alt="" class="w-8 rounded-full -ms-2">
                        <p class="content-center mx-2 text-sm text-gray-600">Dipercaya oleh 500+ orang</p>
                    </div>
                </div>
                <div class="col-span-6">
                    <div class=" relative flex flex-row justify-center">
                        <img src="{{ asset('/Water_heater.png') }}" alt="" class="relative z-0 w-96">
                        <div class="absolute right-90 top-0 z-2">
                            <div class="bg-white p-2 rounded-lg shadow-xl">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="p-2 bg-blue-100 rounded-xl flex items-center justify-center text-xl">
                                        📦
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="text-sm text-gray-600 font-semibold">Unit Ready Stock</div>
                                        <div class="text-sm font-bold text-gray-900">500+</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -right-5 top-20 z-2">
                            <div class="bg-white p-2 rounded-lg shadow-xl">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="p-2 bg-blue-100 rounded-xl flex items-center justify-center text-xl">
                                        📦
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="text-sm text-gray-600 font-semibold">Unit Ready Stock</div>
                                        <div class="text-sm font-bold text-gray-900">500+</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -left-10 top-80 z-2">
                            <div class="bg-white p-2 rounded-lg shadow-xl">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="p-2 bg-blue-100 rounded-xl flex items-center justify-center text-xl">
                                        📦
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="text-sm text-gray-600 font-semibold">Unit Ready Stock</div>
                                        <div class="text-sm font-bold text-gray-900">500+</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -right-5 top-90 z-2">
                            <div class="bg-white p-2 rounded-lg shadow-xl">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="p-2 bg-blue-100 rounded-xl flex items-center justify-center text-xl">
                                        📦
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="text-sm text-gray-600 font-semibold">Unit Ready Stock</div>
                                        <div class="text-sm font-bold text-gray-900">500+</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative container mx-auto px-20 relative z-10 mt-50">
            <div wire:ignore id="particles-js" class="absolute inset-0 z-0"></div>
            <div class="grid grid-cols-12 mt-20">
                <div class="col-span-6">
                    <div class="flex flex-row items-center mb-5">
                        <div class="py-1 px-2 text-xs text-white bg-[#4C7BC3] rounded-lg">
                            <i class="fa-solid fa-temperature-arrow-up"></i>
                        </div>
                        <div class="content-center h-[2px] w-3 bg-gray-400"></div>
                        <div class="content-center py-1 px-2 text-xs rounded-md bg-gray-300 text-black">
                            Produk kami
                        </div>
                    </div>
                    <p class="text-4xl font-bold text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, natus!</p>
                    <p class="text-md my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatum doloremque ab dolorum fugiat assumenda debitis totam obcaecati necessitatibus dignissimos quidem sit natus sint, aliquid, expedita facilis. Pariatur, maiores officiis?</p>
                    <div class="w-full opacity-60 h-[2px] mt-10 bg-gradient-to-r from-transparent via-[#4C7BC3] to-transparent"></div>
                    <div class="flex flex-wrap gap-2 w-full max-w-[700px] pt-5">
                        <div class="p-1 bg-gray-200 shadow-xl text-xs text-black rounded-full">
                            <div class="flex flex-row gap-2">
                                <img src="{{asset('/Gambar_default.jpg')}}" class="w-6 rounded-full" alt="">
                                <p class="content-center text-[15px] pe-2">Alterra</p>
                            </div>
                        </div>
                        <div class="p-1 bg-gray-200 shadow-xl text-xs text-black rounded-full">
                            <div class="flex flex-row gap-2">
                                <img src="{{asset('/Gambar_default.jpg')}}" class="w-6 rounded-full" alt="">
                                <p class="content-center text-[15px] pe-2">Alterra</p>
                            </div>
                        </div>
                        <div class="p-1 bg-gray-200 shadow-xl text-xs text-black rounded-full">
                            <div class="flex flex-row gap-2">
                                <img src="{{asset('/Gambar_default.jpg')}}" class="w-6 rounded-full" alt="">
                                <p class="content-center text-[15px] pe-2">Alterra</p>
                            </div>
                        </div>
                        <div class="p-1 bg-gray-200 shadow-xl text-xs text-black rounded-full">
                            <div class="flex flex-row gap-2">
                                <img src="{{asset('/Gambar_default.jpg')}}" class="w-6 rounded-full" alt="">
                                <p class="content-center text-[15px] pe-2">Alterra</p>
                            </div>
                        </div>
                        <div class="p-1 bg-gray-200 shadow-xl text-xs text-black rounded-full">
                            <div class="flex flex-row gap-2">
                                <img src="{{asset('/Gambar_default.jpg')}}" class="w-6 rounded-full" alt="">
                                <p class="content-center text-[15px] pe-2">Alterra</p>
                            </div>
                        </div>
                        <div class="p-1 bg-gray-200 shadow-xl text-xs text-black rounded-full">
                            <div class="flex flex-row gap-2">
                                <img src="{{asset('/Gambar_default.jpg')}}" class="w-6 rounded-full" alt="">
                                <p class="content-center text-[15px] pe-2">Alterra</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative col-span-6">
                    <img src="{{asset('/Gambar_orang.png')}}" alt="" class="w-[600px]">
                    <div class="absolute bottom-0 w-full h-[300px] z-20
                        bg-gradient-to-b
                        from-[#EFF2FB]/0
                        via-[#EFF2FB]/98
                        to-[#EFF2FB]/100">
                    </div>
                    <div class="absolute left-90 top-30 -translate-y-1/2 space-y-4">
                        <div class="bg-white rounded-2xl px-4 py-3 shadow-lg shadow-blue-100 flex items-center gap-3 w-56">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                🚚
                            </div>
                            <div>
                                <p class="font-semibold text-sm">Free Ongkir</p>
                                <p class="text-xs text-gray-500">Seluruh Indonesia</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute right-100 top-70 -translate-y-1/2 space-y-4">
                        <div class="bg-white rounded-2xl px-4 py-3 shadow-lg shadow-blue-100 flex items-center gap-3 w-56">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                🚚
                            </div>
                            <div>
                                <p class="font-semibold text-sm">Free Ongkir</p>
                                <p class="text-xs text-gray-500">Seluruh Indonesia</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute left-100 top-80 -translate-y-1/2 space-y-4">
                        <div class="bg-white rounded-2xl px-4 py-3 shadow-lg shadow-blue-100 flex items-center gap-3 w-56">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                🚚
                            </div>
                            <div>
                                <p class="font-semibold text-sm">Free Ongkir</p>
                                <p class="text-xs text-gray-500">Seluruh Indonesia</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute right-95 top-20 -translate-y-1/2 space-y-4">
                        <div class="bg-white rounded-2xl px-4 py-3 shadow-lg shadow-blue-100 flex items-center gap-3 w-56">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                🚚
                            </div>
                            <div>
                                <p class="font-semibold text-sm">Free Ongkir</p>
                                <p class="text-xs text-gray-500">Seluruh Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-20 relative z-10">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="flex flex-row items-center justify-center mb-5">
                        <div class="py-1 px-2 text-xs text-white bg-[#4C7BC3] rounded-lg">
                            <i class="fa-solid fa-temperature-arrow-up"></i>
                        </div>
                        <div class="content-center h-[2px] w-3 bg-gray-400"></div>
                        <div class="content-center py-1 px-2 text-xs rounded-md bg-gray-300 text-black">
                            Produk kami
                        </div>
                    </div>
                    <p class="text-4xl font-extrabold text-black mb-5 text-center">Produk terlaris yang kami tawarkan</p>
                    <p class="text-sm text-gray-400 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut incidunt enim a ab labore quidem sunt eum laboriosam. Quas, dolor!</p>
                </div>
                <div class="col-span-12 mt-14">
                    <div class="flex flex-wrap gap-4 justify-center">
                        <div class="bg-neutral-primary-soft block rounded-xl shadow-xl shadow-blue-200">
                            <img src="{{asset('/Gambar_default.jpg')}}" alt="" class=" w-82 h-72 rounded-t-xl">
                            <div class="p-3">
                                <p class="text-[#4C7BC3] text-lg font-bold">HTC 2212 211</p>
                                <p class="text-gray-400 text-sm">Wika WH</p>
                                <p class="truncate w-60">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa corrupti nobis quasi aut? Distinctio alias, ratione inventore autem nostrum illum.</p>
                                <div class="flex flex-row my-2">
                                    <div class="py-0.1 px-2 text-xs rounded-full border-1 border-gray-300">
                                        Listrik
                                    </div>
                                </div>
                                <div class="flex flex-row place-content-between gap-2">
                                    <div class="flex flex-col">
                                        <p class="text-[#4C7BC3] text-xl me-5">Rp.500K</p>
                                        <p class="text-xs text-gray-500">/Unit</p>
                                    </div>
                                    <div class="flex-1 content-center">
                                        <livewire-button.button-variant-4-w-full type="#" judul="Hubungi kami" warna="bg-[#4C7BC3]"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-neutral-primary-soft block rounded-xl shadow-xl shadow-blue-200">
                            <img src="{{asset('/Gambar_default.jpg')}}" alt="" class=" w-82 h-72 rounded-t-xl">
                            <div class="p-3">
                                <p class="text-[#4C7BC3] text-lg font-bold">HTC 2212 211</p>
                                <p class="text-gray-400 text-sm">Wika WH</p>
                                <p class="truncate w-60">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa corrupti nobis quasi aut? Distinctio alias, ratione inventore autem nostrum illum.</p>
                                <div class="flex flex-row my-2">
                                    <div class="py-0.1 px-2 text-xs rounded-full border-1 border-gray-300">
                                        Listrik
                                    </div>
                                </div>
                                <div class="flex flex-row place-content-between gap-2">
                                    <div class="flex flex-col">
                                        <p class="text-[#4C7BC3] text-xl me-5">Rp.500K</p>
                                        <p class="text-xs text-gray-500">/Unit</p>
                                    </div>
                                    <div class="flex-1 content-center">
                                        <livewire-button.button-variant-4-w-full type="#" judul="Hubungi kami" warna="bg-[#4C7BC3]"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-neutral-primary-soft block rounded-xl shadow-xl shadow-blue-200">
                            <img src="{{asset('/Gambar_default.jpg')}}" alt="" class=" w-82 h-72 rounded-t-xl">
                            <div class="p-3">
                                <p class="text-[#4C7BC3] text-lg font-bold">HTC 2212 211</p>
                                <p class="text-gray-400 text-sm">Wika WH</p>
                                <p class="truncate w-60">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa corrupti nobis quasi aut? Distinctio alias, ratione inventore autem nostrum illum.</p>
                                <div class="flex flex-row my-2">
                                    <div class="py-0.1 px-2 text-xs rounded-full border-1 border-gray-300">
                                        Listrik
                                    </div>
                                </div>
                                <div class="flex flex-row place-content-between gap-2">
                                    <div class="flex flex-col">
                                        <p class="text-[#4C7BC3] text-xl me-5">Rp.500K</p>
                                        <p class="text-xs text-gray-500">/Unit</p>
                                    </div>
                                    <div class="flex-1 content-center">
                                        <livewire-button.button-variant-4-w-full type="#" judul="Hubungi kami" warna="bg-[#4C7BC3]"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-[2px] mt-[40px] md:mt-[100px] bg-gradient-to-r from-transparent via-[#4C7BC3] to-transparent"></div>

        <div class="container mx-auto px-20 relative z-10 mt-24">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <h2 class="text-4xl font-bold text-[#4C7BC3] mb-6" data-aos="fade-in">Pertanyaan yang Sering Diajukan (FAQ)</h2>
                    <div class="space-y-4" x-data="{ openIndex: null }" data-aos="fade-up">
                        @foreach([1,2,3,4,5] as $i)
                            <article class="border border-[#4C7BC3] rounded-lg">
                                <button 
                                    class="w-full text-left text-[#4C7BC3] font-semibold p-4 flex justify-between items-center"
                                    @click="openIndex === {{ $i }} ? openIndex = null : openIndex = {{ $i }}">
                                    @switch($i)
                                        @case(1) Apa itu Semar Rent Car? @break
                                        @case(2) Apakah Semar Rent Car menyediakan layanan lepas kunci? @break
                                        @case(3) Jenis kendaraan apa saja yang tersedia di Semar Rent Car? @break
                                        @case(4) Apakah Semar Rent Car melayani perjalanan wisata? @break
                                        @case(5) Bagaimana cara melakukan pemesanan di Semar Rent Car? @break
                                    @endswitch
                                    <svg :class="openIndex === {{ $i }} ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div x-show="openIndex === {{ $i }}" x-transition class="p-4 text-[#4C7BC3] text-sm">
                                    @switch($i)
                                        @case(1) Semar Rent Car adalah perusahaan jasa rental mobil di Semarang yang telah beroperasi sejak tahun 2008. Kami menyediakan berbagai pilihan kendaraan mobil dan motor untuk kebutuhan liburan, bisnis, maupun acara keluarga. @break
                                        @case(2) Ya, Semar Rent Car melayani sewa mobil lepas kunci maupun dengan driver profesional, sehingga pelanggan dapat memilih layanan sesuai kebutuhan dan kenyamanan perjalanan. @break
                                        @case(3) Kami menyediakan armada lengkap mulai dari city car, MPV keluarga, SUV, hingga kendaraan untuk rombongan seperti Hiace, Elf, dan bus. @break
                                        @case(4) Tentu. Semar Rent Car melayani rental mobil untuk wisata di Semarang dan sekitarnya, baik untuk perjalanan pribadi, keluarga, maupun rombongan. @break
                                        @case(5) Pemesanan dapat dilakukan dengan mudah melalui WhatsApp, telepon, atau datang langsung ke lokasi. Tim kami siap membantu Anda memilih kendaraan terbaik. @break
                                    @endswitch
                                </div>
                            </article>
                        @endforeach
                    </div>  
                </div>
            </div>
        </div>        

        <div class="container mx-auto px-20 relative z-10 mt-24">
            <div class="grid grid-cols-12 mb-10">
                <div class="col-span-12">
                    <div class="flex flex-row items-center justify-center mb-5">
                        <div class="py-1 px-2 text-xs text-black bg-[#4C7BC3] rounded-lg">
                            <i class="fa-solid fa-temperature-arrow-up"></i>
                        </div>
                        <div class="content-center h-[2px] w-3 bg-gray-400"></div>
                        <div class="content-center py-1 px-2 text-xs rounded-md bg-gray-300 text-black">
                            Produk kami
                        </div>
                    </div>
                    <p class="text-4xl font-extrabold text-black mb-5 text-center">Produk terlaris yang kami tawarkan</p>
                    <p class="text-sm text-gray-400 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut incidunt enim a ab labore quidem sunt eum laboriosam. Quas, dolor!</p>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <!-- Form Kontak -->
                <div class="bg-white shadow-xl rounded-xl p-8 shadow-lg flex flex-col gap-5" aria-label="Formulir Kontak">
                    <div>
                        <label class="text-[#4C7BC3] font-semibold mb-1 block" for="name">Nama</label>
                        <input type="text" id="name" name="name" placeholder="Nama Anda"
                            class="w-full p-3 rounded-lg bg-gray-200 border-0 text-black placeholder-gray-400 focus:ring-2 focus:ring-yellow-400 outline-none">
                    </div>
                    <div>
                        <label class="text-[#4C7BC3] font-semibold mb-1 block" for="type">Tipe pesan</label>
                        <select  id="feedbackType" name="type" class="w-full p-3 rounded-lg bg-gray-200 border-0 text-black placeholder-gray-400 focus:ring-2 focus:ring-yellow-400 outline-none">
                            <option value="">Filter Tipe</option>
                            <option value="melakukan booking kendaraan di semar rent car">Booking</option>
                            <option value="melakukan kerja sama dengan semar rent car">Kerja sama</option>
                            <option value="memberikan kritik dan saran untuk semar rent car">Kritik dan saran</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-[#4C7BC3] font-semibold mb-1 block" for="message">Pesan</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda..."
                            class="w-full p-3 rounded-lg bg-gray-200 border-0 text-black placeholder-gray-400 focus:ring-2 focus:ring-yellow-400 outline-none"></textarea>
                    </div>
                    <button type="button" onclick="openModal('modalSyarat')" class="bg-[#4C7BC3] text-white font-bold py-3 rounded-lg hover:bg-yellow-500 transition-all">Kirim Pesan</button>
                </div>

                <!-- Info Kontak + Map -->
                <div class="flex flex-col gap-6">

                    <!-- Alamat & Sosial Media -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <address class="bg-white shadow-xl rounded-xl p-6 shadow-lg not-italic">
                            <h3 class="text-[#4C7BC3] font-bold text-xl mb-2">Alamat</h3>
                            <p class="text-black/70">Gedung Astagina AKPOL, Jl. Sultan Agung, Candi Baru, Gajahmungkur, Semarang, Jawa Tengah 50232</p>
                        </address>

                        <div class="bg-white shadow-xl rounded-xl p-6 shadow-lg">
                            <h3 class="text-[#4C7BC3] font-bold text-xl mb-4">Sosial Media</h3>
                            <ul class="flex flex-col gap-3">
                                <li>
                                    <a href="https://instagram.com" target="_blank" class="text-[#4C7BC3] hover:text-yellow-500 transition">
                                        <i class="bi bi-instagram"></i> <span class="text-black/70">@semarrentcar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/6285822972624" target="_blank" class="text-[#4C7BC3] hover:text-yellow-500 transition">
                                        <i class="bi bi-whatsapp"></i> <span class="text-black/70">0858-2297-2624</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/6281325212803" target="_blank" class="text-[#4C7BC3] hover:text-yellow-500 transition">
                                        <i class="bi bi-whatsapp"></i> <span class="text-black/70">0813-2521-2803</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.9231985569554!2d110.41580959999999!3d-7.0183138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b829493ef03%3A0xfd34aa99e9e8efcd!2sSemar%20Rent%20Car%20-%20Rental%20mobil%20terpercaya%2C%20lengkap%20dan%20murah!5e0!3m2!1sid!2sid!4v1766898445377!5m2!1sid!2sid" 
                            class="w-full h-72 border-0" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade" 
                            title="Lokasi Semar Rent Car di Google Maps">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>