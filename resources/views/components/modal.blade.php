<div 
    x-data="{
        show: @entangle($attributes->wire('model'))
    }"
    x-show="show"
    x-on:keydown.escape.window="show = false"
    class="fixed inset-0 overflow-y-auto px-4 py-6 md:py-24 sm:px-0 z-40 ">

    <div x-show="show" class="fixed inset-0 transform" x-on:click="show = false">
        <div class="absolute inset-0 bg-gray-800 opacity-75" ></div>
    </div>

    <div x-show="show" class="rounded-lg mt-16 bg-coffee overflow-hidden transform sm:w-full sm:mx-auto max-w-lg">
        
        <!-- <div class="absolute top-0 right-0 mr-2 mt-2" > -->
        <a  href="/?#footer"   x-data="{}" x-on:click="window.livewire.emitTo('contact-modal', 'hide')">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-1 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
        </a>
        <!-- </div> -->
        {{ $slot }}
    
     
    </div>
</div>