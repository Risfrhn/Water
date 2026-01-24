<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <nav class="bg-[#EFF2FB] fixed w-full z-20 top-0 start-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-7" alt="Flowbite Logo" />
                <span class="self-center text-xl text-heading font-semibold whitespace-nowrap">Flowbite</span>
            </a>
        <div class="flex items-center gap-2 md:order-2">
            <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="flex items-center justify-center md:hidden text-body hover:text-heading bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-2 focus:ring-neutral-tertiary font-medium leading-5 rounded-base text-sm w-10 h-10 focus:outline-none">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/></svg>
                <span class="sr-only">Search</span>
            </button>
            
                <div class="relative hidden md:block">
                    <input type="text" id="input-group-1" class="block w-full text-sm py-1.5 pl-4 pr-10 rounded-md text-gray-400 border-0 focus:ring-0" placeholder="Search">
                </div>
                <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary" aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/></svg>
                </button>
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
                        <a href="#" class="flex content-center my-auto py-1.5 px-4 text-sm rounded-lg bg-[#EFF2FB] hover:bg-[#4C7BC3] hover:rounded-lg hover:text-white transition all duration-300 " aria-current="page"><span class="my-1">Halaman utama</span></a>
                    </li>
                    <li>
                        <a href="#" class="flex content-center my-auto py-1.5 px-4 text-sm rounded-lg bg-[#EFF2FB] hover:bg-[#4C7BC3] hover:rounded-lg hover:text-white transition all duration-300 "><span class="my-1">Produk</span></a>
                    </li>
                    <li>
                        <a href="#" class="flex content-center my-auto py-1.5 px-4 text-sm rounded-lg bg-[#EFF2FB] hover:bg-[#4C7BC3] hover:rounded-lg hover:text-white transition all duration-300 "><span class="my-1">Kontak Kami</span></a>
                    </li>
                     <li>
                        <button id="multiLevelDropdownButton" data-dropdown-toggle="multi-dropdown" class="flex py-1.5 px-4 text-sm rounded-lg bg-[#EFF2FB] hover:bg-[#4C7BC3] hover:rounded-lg hover:text-white transition all duration-300 ">
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
    </nav>
</div>