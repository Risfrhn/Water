<?php

use Livewire\Component;

new class extends Component
{
    public ?string $icon = null;
    public ?string $deskripsi = null;
    public ?int $item = null;
      
};
?>


<div class="xl:col-span-3 md:col-span-6 col-span-12">
    <div class="p-10 bg-white rounded-2xl shadow-xl">
        <div class="flex flex-row">
            <i class="{{ $icon }} text-6xl"></i>
            <i class="fa-solid fa-angle-right ms-auto"></i>
        </div>
        <p class="text-lg font-semibold text-gray-400 mt-5 mb-3 ">{{$deskripsi}}</p>
        <p class="text-4xl font-semibold text-[#424954]">{{$item}} Item</p>
    </div>
</div>
