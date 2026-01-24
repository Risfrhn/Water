<?php

use Livewire\Component;

new class extends Component
{
    public ?string $pesan;
};
?>

<div class="py-3.5 px-3 bg-white shadow-lg rounded-2xl mb-4">
    <div class="flex flex-row gap-3">
        <div class="py-4 px-4 bg-red-50 rounded-2xl">
            <i class="fa-regular fa-bell text-[20px] text[#424954]"></i>
        </div>
        <p class="text-sm content-center">{{$pesan}}</p>
        <i class="fa-solid fa-trash-can text-lg content-center ms-auto me-5"></i>
    </div>
</div>