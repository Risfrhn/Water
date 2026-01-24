<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <aside id="logo-sidebar" class="hidden md:block fixed left-0 top-0 h-full z-40 bg-[#FFFFFF] shadow-xl" aria-label="Sidebar">
        <div class="h-full flex flex-col items-center py-6">
            <a href="https://flowbite.com/" class="flex items-center justify-center mb-5 mx-auto">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-10" alt="Flowbite Logo" />
            </a>
            <ul class="flex flex-col gap-10 my-auto">
                <li class="mx-auto">
                    <a href="/admin/dashboard" wire:navigate class="px-10 py-4 text-xl text-[#424954] border-r-4 border-transparent hover:border-[#4C7BC3] hover:bg-gradient-to-l from-[#bfcee8] to-transparenthover:text-[#4C7BC3] transition-all duration-300">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </li>
                <li class="mx-auto">
                    <a href="/admin/barang" wire:navigate class="px-10 py-4 text-xl text-[#424954] border-r-4 border-transparent hover:border-[#4C7BC3] hover:bg-gradient-to-l from-[#bfcee8] to-transparenthover:text-[#4C7BC3] transition-all duration-300">
                        <i class="fa-solid fa-box-archive"></i>
                    </a>
                </li>
                <li class="mx-auto">
                    <a href="/admin/blog" wire:navigate class="px-10 py-4 text-xl text-[#424954] border-r-4 border-transparent hover:border-[#4C7BC3] hover:bg-gradient-to-l from-[#bfcee8] to-transparenthover:text-[#4C7BC3] transition-all duration-300">
                        <i class="fa-solid fa-paper-plane"></i>
                    </a>
                </li>
                <li class="mx-auto">
                    <a href="/admin/promo" wire:navigate class="px-10 py-4 text-xl text-[#424954] border-r-4 border-transparent hover:border-[#4C7BC3] hover:bg-gradient-to-l from-[#bfcee8] to-transparenthover:text-[#4C7BC3] transition-all duration-300">
                        <i class="fa-solid fa-tags"></i>
                    </a>
                </li>
            </ul>
            <div class="mt-auto py-6 border-t-2 border-white/30">
                <a href="" class="px-10 py-4 text-xl text-[#424954] border-r-4 border-transparent hover:border-[#4C7BC3] hover:bg-gradient-to-l from-[#bfcee8] to-transparenthover:text-[#4C7BC3] transition-all duration-300">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </div>
        </div>
    </aside>
</div>