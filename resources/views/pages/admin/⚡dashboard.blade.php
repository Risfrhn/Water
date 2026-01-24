<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <div class="grid grid-cols-12 items-center gap-y-4">
        <div class="lg:col-span-4 sm:col-span-6 col-span-12 order-2 sm:order-none">
            <livewire-search.search-variant-1/>
        </div>
        <div class="lg:col-span-4 hidden lg:flex justify-center">
            <div class="flex items-center gap-2 text-sm">
                <i class="fa-regular fa-calendar-days"></i>
                <p>17 May 2026</p>
            </div>
        </div>
        <div class="col-span-6 sm:hidden flex justify-start">
            <i class="fa-solid fa-bars text-xl"></i>
        </div>
        <div class="lg:col-span-4 col-span-6 flex justify-end order-1 sm:order-none">
            <div class="flex items-center gap-3">
                <i class="fa-regular fa-bell text-xl text-[#424954]"></i>

                <img src="/Gambar_default.jpg" alt=""
                    class="w-12 h-12 rounded-full object-cover">

                <div class="hidden md:block">
                    <p class="text-sm font-semibold">Atika Maulida Zahra</p>
                    <p class="text-sm text-gray-400">Admin</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 mt-5 sm:mt-14">
        <div class="col-span-6">
            <p class="text-2xl sm:text-3xl font-semibold">Dashboard</p>
        </div>
        <div class="col-span-6 ms-auto">
            <livewire-button.button-variant-1 type="#" judul="Ubah Dahsboard" warna="bg-[#4C7BC3]"/>
        </div>
    </div>
    <div class="grid grid-cols-12 mt-5 sm:mt-22 2xl:mt-10 gap-6">
        <div class="xl:col-span-7 col-span-12">
            <div class="md:p-5 bg-[#FFFFFF] rounded-2xl shadow-lg">
                <div class="flex flex-row p-10">
                    <div class="grid grid-cols-12 w-full gap-5">
                        <div class="col-span-12 sm:col-span-6">
                            <p class="text-3xl md:text-5xl 2xl:text-6xl">Hi, Atika!</p>
                            <p class="text-gray-400 xl:mt-6.5 2xl:mt-7">Apa yang akan kita lakukan hari ini?</p>
                            <div class="grid grid-cols-2 gap-y-5 2xl:gap-x-10 xl:gap-x-5 mt-5 xl:mt-10">
                                <div class="flex items-center gap-2">
                                    <i class="fa-regular fa-compass text-red-500"></i>
                                    <a href="#" class="text-xs 2xl:text-sm hover:underline">Check barang</a>
                                </div>

                                <div class="flex items-center gap-2">
                                    <i class="fa-regular fa-compass text-blue-500"></i>
                                    <a href="#" class="text-xs 2xl:text-sm hover:underline">Check barang</a>
                                </div>

                                <div class="flex items-center gap-2">
                                    <i class="fa-regular fa-compass text-green-500"></i>
                                    <a href="#" class="text-xs 2xl:text-sm hover:underline">Check barang</a>
                                </div>

                                <div class="flex items-center gap-2">
                                    <i class="fa-regular fa-compass text-purple-500"></i>
                                    <a href="#" class="text-xs 2xl:text-sm hover:underline">Check barang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 flex items-center justify-center hidden sm:block">
                            <img src="/Gambar_admin.png" class="object-contain -mt-30 md:-mt-30 xl:-mt-40 w-60 xl:w-74">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- notifikasi -->
        <div class="xl:col-span-5 col-span-12">
            <div class="flex flex-row mb-5">
                <i class="fa-regular fa-bell text-[20px] content-center me-3 text[#424954]"></i>
                <p class="text-xl">Notifikasi</p>
                <a href=""class="ms-auto">Lihat semua</a>
            </div>
            <livewire-card.card-variant-2 pesan="Kamu berhasil menbambahkan 1 item barang wika"/>
            <livewire-card.card-variant-2 pesan="Kamu berhasil menbambahkan 1 item barang wika"/>
            <livewire-card.card-variant-2 pesan="Kamu berhasil menbambahkan 1 item barang wika"/>
        </div>
    </div>


    <!-- Count -->
    <div class="grid grid-cols-12 mt-5 gap-6">
        <livewire-card.card-variant-1 icon="fa-solid fa-percent text-red-500" deskripsi="Total item yang dimiliki di gudang" :item="100"/>
        <livewire-card.card-variant-1 icon="fa-solid fa-percent text-red-500" deskripsi="Total item yang dimiliki di gudang" :item="100"/>
        <livewire-card.card-variant-1 icon="fa-solid fa-percent text-red-500" deskripsi="Total item yang dimiliki di gudang" :item="100"/>
        <livewire-card.card-variant-1 icon="fa-solid fa-percent text-red-500" deskripsi="Total item yang dimiliki di gudang" :item="100"/>
    </div>
</div>