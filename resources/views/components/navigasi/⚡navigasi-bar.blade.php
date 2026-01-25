<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <nav class="bg-[#EFF2FB]/5 backdrop-blur-xl fixed w-full z-20 top-0 start-0">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center justify-between py-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-7" alt="Flowbite Logo" />
                    <span class="self-center text-xl text-heading font-semibold whitespace-nowrap">Flowbite</span>
                </a>
                <div class="flex items-center gap-2 md:order-2">
                    <div class="py-1.5 px-5 bg-transparent border-2 border-[#4C7BC3] text-[#4C7BC3] hover:bg-[#4C7BC3] rounded-lg hover:text-white transition all duration-300">
                        <div class="flex flex-row gap-3">
                            <i class="fa-solid fa-phone content-center"></i>
                            <p class="content-center">Hubungi Kami</p>
                        </div>
                    </div>
                </div>
                
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                    <div class="relative mt-3 md:hidden">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/></svg>
                        </div>
                        <input type="text" id="input-group-1" class="block w-full ps-9 pe-3 py-2.5 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-2.5 py-2 shadow-xs placeholder:text-body" placeholder="Search">
                    </div>
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-2 rtl:space-x-reverse md:mt-0 md:border-0">
                        <li>
                            <a href="#" class="flex content-center my-auto py-1.5 px-4 text-sm rounded-lg bg-transparent hover:bg-[#4C7BC3] hover:rounded-lg hover:text-white transition all duration-300 " aria-current="page"><span class="my-1">Halaman utama</span></a>
                        </li>
                        <li>
                            <a href="#" class="flex content-center my-auto py-1.5 px-4 text-sm rounded-lg bg-transparent hover:bg-[#4C7BC3] hover:rounded-lg hover:text-white transition all duration-300 "><span class="my-1">Produk</span></a>
                        </li>
                        <li>
                            <a href="#" class="flex content-center my-auto py-1.5 px-4 text-sm rounded-lg bg-transparent hover:bg-[#4C7BC3] hover:rounded-lg hover:text-white transition all duration-300 "><span class="my-1">Kontak Kami</span></a>
                        </li>
                        <li>
                            <button id="multiLevelDropdownButton" data-dropdown-toggle="multi-dropdown" class="flex py-1.5 px-4 text-sm rounded-lg bg-transparent hover:bg-[#4C7BC3] hover:rounded-lg hover:text-white transition all duration-300 ">
                                <span class="my-1">Informasi Lainnya</span>
                                <svg class="w-4 h-4 ms-1.5 my-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/></svg>
                            </button>
                            <div id="multi-dropdown" class="z-10 hidden bg-white rounded-xl shadow-lg w-44">
                                <ul class="p-2 text-sm text-body font-medium" aria-labelledby="multiLevelDropdownButton">
                                <li>
                                    <a href="#" class="inline-flex items-center w-full p-2 hover:bg-[#4C7BC3] hover:text-white rounded">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-flex items-center w-full p-2 hover:bg-[#4C7BC3] hover:text-white rounded">Earnings</a>
                                </li>
                                <li>
                                    <a href="#" class="inline-flex items-center w-full p-2 hover:bg-[#4C7BC3] hover:text-white rounded">Sign out</a>
                                </li>
                                </ul>
                            </div>
                        </li>   
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>