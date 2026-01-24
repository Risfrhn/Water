<?php

use Livewire\Component;

new class extends Component
{
    public ?string $type = null;
    public ?string $warna = null;
    public ?string $warnaTulisan = null ?? "white";
    public ?string $judul = null;
    public ?string $icon = null;
};
?>

<div>
    <div class="relative">
        <span class="absolute inset-y-0 left-1/2 -translate-x-1/2 lg:left-3 lg:translate-x-0 flex items-center text-{{ $warnaTulisan ?? 'white' }}">
            <i class="{{ $icon }}"></i>
        </span>
        <button type="{{$type}}" class="p-5 lg:py-3 lg:pl-10 lg:pr-3 {{$warna}} text-xs lg:text-md rounded-lg text-{{$warnaTulisan ?? white}} shadow-lg hover:shadow-[0_10px_25px_rgba(76,123,195,0.55)] transition-shadow duration-300">
            <span class="hidden lg:block">
                {{ $judul }}
            </span>
        </button>
    </div>
</div>