<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <button data-dropdown-toggle="fab-dropdown" class="fixed bottom-6 right-6 bg-blue-600 text-white p-4 rounded-full shadow-lg">
        <i class="fa-solid fa-plus"></i>
    </button>

    <div id="fab-dropdown" class="hidden">
    <a class="block p-2">Action 1</a>
    <a class="block p-2">Action 2</a>
    </div>

</div>