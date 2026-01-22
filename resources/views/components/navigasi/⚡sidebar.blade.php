<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>

    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="text-heading bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded-base ms-3 mt-3 text-sm p-2 focus:outline-none inline-flex sm:hidden">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10"/>
        </svg>
    </button>

    <aside id="logo-sidebar" class="fixed left-4 top-4 bottom-4 z-40 bg-[#92C7CF] rounded-2xl shadow-xl" aria-label="Sidebar">
        <div class="h-full flex flex-col items-center py-6 px-3">
            <a href="https://flowbite.com/" class="flex items-center justify-center mb-5 mx-auto">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-10" alt="Flowbite Logo" />
            </a>
            <ul class="flex flex-col gap-6">
                <li>
                    <a href="" class="text-2xl text-white py-2 px-3 hover:bg-[#AAD7D9] rounded-xl transition delay-150 duration-300 ease-in-out">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </li>
                <li>
                    <a href="" class="text-2xl text-white py-2 px-3 hover:bg-[#AAD7D9] rounded-xl transition delay-150 duration-300 ease-in-out">
                        <i class="fa-solid fa-water"></i>
                    </a>
                </li>
                <li>
                    <a href="" class="text-3xl text-white py-2 px-3 hover:bg-[#AAD7D9] rounded-xl transition delay-150 duration-300 ease-in-out">
                        <i class="fa-brands fa-blogger"></i>
                    </a>
                </li>
                <li>
                    <a href="" class="text-4xl text-white py-2 px-3 hover:bg-[#AAD7D9] rounded-xl transition delay-150 duration-300 ease-in-out">
                        <i class="fa-solid fa-receipt"></i>
                    </a>
                </li>
            </ul>
            <div class="mt-auto pt-6 border-t-2 border-white/30">
                <a class="p-3 rounded-xl hover:bg-[#AAD7D9] text-center">
                    <i class="fa-solid fa-right-from-bracket text-2xl text-white"></i>
                </a>
            </div>
        </div>
    </aside>

    <div class="p-4 sm:ml-22">
        <div class="p-4 border-1 border-default border-dashed rounded-base">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 rounded-base bg-neutral-secondary-soft mb-4">
                <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 rounded-base bg-neutral-secondary-soft mb-4">
                <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded-base bg-neutral-secondary-soft">
                    <p class="text-fg-disabled">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/></svg>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>