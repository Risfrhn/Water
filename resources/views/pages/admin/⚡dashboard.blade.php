<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <div class="px-10 py-5 sm:ml-30">
        <div class="grid grid-cols-12">
            <div class="col-span-4 content-center">
                <div class="relative">
                    <input type="text"
                        class="border-0 rounded-lg shadow-lg text-gray-400 font-semibold pl-4 pr-4 py-2"
                        placeholder="Search...">

                    <span class="absolute left-48 top-0 translate-y-1/3 text-gray-400">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                </div>
            </div>
            <div class="col-span-4 mx-auto my-auto">
                <div class="flex flex-row gap-2">
                    <i class="fa-regular fa-calendar-days mt-0.5"></i>
                    <p class="text-sm">17 May 2026</p>
                </div>
            </div>
            <div class="col-span-4 ms-auto">
                <div class="flex flex-row gap-2">
                    <i class="fa-regular fa-bell text-[20px] content-center mx-5 text[#424954]"></i>
                    <img src="/Gambar_default.jpg" alt="" class="rounded-full w-12">
                    <div class="flex flex-col my-auto">
                        <p class="text-sm font-semibold">Atika Maulida Zahra</p>
                        <p class="text-sm text-gray-400">Admin</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 mt-12">
            <div class="col-span-6">
                <p class="text-3xl font-semibold">Dashboard</p>
            </div>
            <div class="col-span-6 ms-auto">
                <button class="py-2 px-10 bg-[#4C7BC3] rounded-lg text-white shadow-lg hover:shadow-[0_10px_25px_rgba(76,123,195,0.55)] transition-shadow duration-300">Buat Baru</button>
            </div>
        </div>
        <div class="grid grid-cols-12 mt-12 gap-6">
            <div class="col-span-8">
                <div class="py-5 px-5 bg-[#FFFFFF] rounded-2xl shadow-lg">
                    <div class="flex flex-row p-10">
                        <div class="grid grid-cols-12 w-full gap-5">
                            <div class="col-span-6">
                                <p class="text-6xl">Hi, Atika!</p>
                                <p class="text-gray-400 mt-7">Apa yang akan kita lakukan hari ini?</p>
                            </div>
                            <div class="col-span-6">
                                <p>Hi, Atika!</p>
                                <p>Ada berita baik apa hari ini?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-4">
                <div class="flex flex-row mb-5">
                    <i class="fa-regular fa-bell text-[20px] content-center me-3 text[#424954]"></i>
                    <p class="text-xl">Notifikasi</p>
                    <a href=""class="ms-auto">Lihat semua</a>
                </div>
                <div class="py-5 px-5 bg-white shadow-lg rounded-2xl mb-4">
                    <div class="flex flex-row gap-3">
                        <div class="py-5 px-5 bg-red-50 rounded-2xl">
                            <i class="fa-regular fa-bell text-[20px] text[#424954]"></i>
                        </div>
                        <p class="text-lg content-center">Kamu berhasil menbambahkan 1 item barang wika</p>
                        <i class="fa-solid fa-trash-can text-lg content-center ms-auto me-5"></i>
                    </div>
                </div>
                <div class="py-5 px-5 bg-white shadow-lg rounded-2xl mb-4">
                    <div class="flex flex-row gap-3">
                        <div class="py-5 px-5 bg-red-50 rounded-2xl">
                            <i class="fa-regular fa-bell text-[20px] text[#424954]"></i>
                        </div>
                        <p class="text-lg content-center">Kamu berhasil menbambahkan 1 item barang wika</p>
                        <i class="fa-solid fa-trash-can text-lg content-center ms-auto me-5"></i>
                    </div>
                </div>
                <div class="py-5 px-5 bg-white shadow-lg rounded-2xl mb-4">
                    <div class="flex flex-row gap-3">
                        <div class="py-5 px-5 bg-red-50 rounded-2xl">
                            <i class="fa-regular fa-bell text-[20px] text[#424954]"></i>
                        </div>
                        <p class="text-lg content-center">Kamu berhasil menbambahkan 1 item barang wika</p>
                        <i class="fa-solid fa-trash-can text-lg content-center ms-auto me-5"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>