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
            <div class="grid grid-col-12 mt-50">
                <div class="flex flex-row justify-center content-center">
                    <div class="py-1 ps-1 pe-5 bg-[#FFFFFF] rounded-full">
                        <div class="flex flex-row gap-3">
                            <div class="py-1 px-3 bg-[#4C7BC3] text-white rounded-full">
                                Baru
                            </div>
                            <p class="content-center">Water Heater Modern</p>
                        </div>
                    </div>
                </div>

                <p class="text-8xl font-extrabold text-center my-5" style="line-height: 1.3">Solusi Air Panas Praktis <br>untuk Setiap Hari</p>
                <p class="text-md font text-gray-600 text-center" style="line-height: 2">Nikmati air panas instan dengan water heater hemat energi, aman digunakan,<br> dan tahan lama untuk kebutuhan rumah Anda.</p>

                <div class="flex flex-row gap-2 justify-center my-5">
                    <livewire-button.button-variant-3 type="#" judul="Ubah Dahsboard" warna="bg-[#4C7BC3]" borderButton="border-2 border-[#4C7BC3]"/>
                    <livewire-button.button-variant-3 type="#" judul="Ubah Dahsboard" borderButton="border-2 border-[#4C7BC3]" warna="bg-transparent" warnaTulisan="[#4C7BC3]" />
                </div>
                <div class="flex flex-row justify-center mt-5">
                    <img src="{{asset('/Gambar_default.jpg')}}" alt="" class="w-14 rounded-full">
                    <img src="{{asset('/Gambar_default.jpg')}}" alt="" class="w-14 rounded-full -ms-5">
                    <img src="{{asset('/Gambar_default.jpg')}}" alt="" class="w-14 rounded-full -ms-5">
                    <p class="content-center mx-2 text-lg text-gray-600">Dipercaya oleh 500+ orang</p>
                </div>
            </div>
        </div>

        <div class="relative flex justify-center mt-60">
            <div class="absolute bottom-0 w-full h-[500px] z-20
                bg-gradient-to-b
                from-[#EFF2FB]/0
                via-[#EFF2FB]/98
                to-[#EFF2FB]/100">
            </div>
            <img src="{{ asset('/Water_heater.png') }}" 
                alt=""
                class="relative z-10 w-96">
        </div>
    </div>
</div>