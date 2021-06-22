<form  wire:submit.prevent="submit" class="mt-4 sm:flex sm:max-w-md">
    <label for="email" class="sr-only">Email address</label>
    <div>
    <input type="email" name="email" id="email"  wire:model="email" autocomplete="email" placeholder="Email address" required class="appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none  focus:ring-1 focus:ring-dark-coffee focus:border-coffee focus:placeholder-gray-400" placeholder="Enter your email">
    @error('email') <span class="text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
        <button type="submit" class="w-full flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-black bg-gradient-to-r from-coffee to-dark-coffee hover:text-white hover:from-dark-coffee hover:to-coffee focus:outline-none  focus:ring-1 focus:ring-dark-coffee focus:border-coffee">
            Subscribe
        </button>
    </div>
    
</form>
