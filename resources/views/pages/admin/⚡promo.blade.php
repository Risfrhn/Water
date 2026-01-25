<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <div class="px-10 py-5 md:ml-30">
        <div class="grid grid-cols-12 items-center gap-y-4">
            <div class="sm:col-span-6 col-span-12 order-2 md:order-none">
                <livewire-search.search-variant-1/>           
            </div>
            <div class="col-span-6 md:hidden flex justify-start">
                <i class="fa-solid fa-bars text-xl"></i>
            </div>
            <div class="col-span-6 flex justify-end order-1 sm:order-none">
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
        <div class="grid grid-cols-12 items-center my-10">
            <div class="col-span-6">
                <div class="flex flex-row gap-2">
                    <i class="text-xl text-[#4C7BC3] fa-solid fa-tags content-center py-2 px-3 bg-white shadow-lg rounded-lg"></i>
                    <div class="flex flex-col">
                        <p class="text-xl font-extrabold content-center">Promo</p>
                        <p class="text-sm font-extrabold text-gray-400 content-center">Control Promo</p>
                    </div>
                </div>
            </div>
            <div class="col-span-6">
                <div class="flex flex-row gap-2">
                    <div class="me-auto"></div>
                    <livewire-button.button-variant-2-responsive class="me-auto" type="#" judul="Export data" warna="bg-white" warnaTulisan="gray-400" icon="fa-solid fa-cloud-arrow-down"/>            
                    <livewire-button.button-variant-2-responsive class="me-auto" type="#" judul="Tambah data" warna="bg-[#4C7BC3]" icon="fa-solid fa-plus"/>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 items-center my-10">
            <div class="col-span-12">
                <div class="relative overflow-x-auto shadow-xs rounded-xl">
                    <table class="w-full text-sm text-left rtl:text-right text-body">
                        <thead class="text-sm text-body bg-[#4C7BC3] rounded-xl">
                            <tr class="text-white">
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Nama product
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    QTY
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Merk
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Harga
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white">
                                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-row gap-3">
                                        <livewire-button.button-variant-2-responsive class="me-auto" type="#" judul="Ubah Barang" warna="bg-green-400" warnaTulisan="white" icon="fa-solid fa-pencil"/>            
                                        <livewire-button.button-variant-2-responsive class="me-auto" type="#" judul="Hapus Barang" warna="bg-red-400" icon="fa-solid fa-trash-can"/>
                                        <livewire-button.button-variant-2-responsive class="me-auto" type="#" judul="Detail Barang" warna="bg-[#4C7BC3]" icon="fa-solid fa-circle-info"/>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>