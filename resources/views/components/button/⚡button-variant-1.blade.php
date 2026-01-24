<?php

use Livewire\Component;

new class extends Component
{
    public ?string $type = null;
    public ?string $warna = null;
    public ?string $warnaTulisan = null ?? "white";
    public ?string $judul = null;

};
?>

<div>
    <button type="{{$type}}" class="py-3 px-5 {{$warna}} text-xs sm:text-md rounded-lg text-{{$warnaTulisan ?? white}} shadow-lg hover:shadow-[0_10px_25px_rgba(76,123,195,0.55)] transition-shadow duration-300">{{$judul}}</button>
</div>