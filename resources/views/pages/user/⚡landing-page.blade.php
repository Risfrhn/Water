<?php

use Livewire\Component;

new class extends Component
{
    
};
?>

<div>
    <div class="w-full my-30">
        <livewire-animasi.uap/>   
        <div class="container mx-auto relative z-10">
            <div class="flex flex-row justify-center">
                <div class="py-1 ps-1 pe-5 bg-[#FFFFFF] rounded-full">
                    <div class="flex flex-row gap-3">
                        <div class="py-1 px-3 bg-[#4C7BC3] text-white rounded-full">
                            Baru
                        </div>
                        <p class="content-center">Water Heater Modern</p>
                    </div>
                </div>
            </div>

            <p class="text-5xl font-extrabold text-center my-5" style="line-height: 1.3">Solusi Air Panas Praktis <br>untuk Setiap Hari</p>
            <p class="text-md font text-gray-400 text-center" style="line-height: 2">Nikmati air panas instan dengan water heater hemat energi, aman digunakan,<br> dan tahan lama untuk kebutuhan rumah Anda.</p>

            <div class="flex flex-row gap-2 justify-center my-5">
                <livewire-button.button-variant-3 type="#" judul="Ubah Dahsboard" warna="bg-[#4C7BC3]" borderButton="border-2 border-[#4C7BC3]"/>
                <livewire-button.button-variant-3 type="#" judul="Ubah Dahsboard" borderButton="border-2 border-[#4C7BC3]" warna="bg-transparent" warnaTulisan="[#4C7BC3]" />
            </div>
        </div>     
    </div>
</div>