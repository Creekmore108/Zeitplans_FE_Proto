<form wire:submit.prevent="submit" class="mt-9 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
              <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                <div class="mt-1">
                  <input type="text" name="first_name" id="first_name" wire:model="first_name"  placeholder="First name" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                  @error('first_name') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
              </div>
              <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                <div class="mt-1">
                  <input type="text" name="last_name" id="last_name" wire:model="last_name" placeholder="Last name" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <div class="mt-1">
                  <input id="email" name="email" type="email" wire:model="email" autocomplete="email"  placeholder="Email address" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                  @error('email') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
              </div>
              <div class="sm:col-span-2">
                <label for="organization" class="block text-sm font-medium text-gray-700">Organization</label>
                <div class="mt-1">
                  <input type="text" name="organization" id="organization" wire:model="organization"  placeholder="Organization name" autocomplete="organization" class="block w-full shadow-sm sm:text-sm  focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <div class="flex justify-between">
                  <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                  <span id="phone_description" class="text-sm text-gray-500">Optional</span>
                </div>
                <div class="mt-1">
                  <input type="text" name="phone" id="phone" wire:model="phone" autocomplete="tel" placeholder="Phone number" aria-describedby="phone_description" class="block w-full shadow-sm focus:ring-yellow-600 focus:border-yellow-600 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <div class="flex justify-between">
                  <label for="content" class="block text-sm font-medium text-gray-700">How can we help you?</label>
                  <span id="content_description" class="text-sm text-gray-500">Max. 500 characters</span>
                </div>
                <div class="mt-1">
                  <textarea id="content" name="content" wire:model="content" aria-describedby="content_description" rows="4" class="block w-full shadow-sm sm:text-sm focus:ring-yellow-600 focus:border-yellow-600  border border-gray-300 rounded-md"></textarea>
                  @error('content') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
              </div>
              
              <div class="sm:col-span-2">
                <label for="reference" class="block text-sm font-medium text-gray-700">How did you hear about us?</label>
                <div class="mt-1">
                  <input type="text" name="reference" wire:model="reference" id="reference" class="shadow-sm focus:ring-yellow-600 focus:border-yellow-600  block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
              </div>
              <div class="text-center sm:col-span-2">
                <button  class="inline-flex justify-center py-4 px-6  shadow-sm text-sm font-medium rounded-md text-gray-900 bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 ">
                  Submit
                </button>
              </div>
            </form>
