<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-3 border border-transparent rounded-md font-semibold tracking-widest text-black bg-gradient-to-r from-yellow-600 to-yellow-800 hover:text-white hover:from-yellow-800 hover:to-yellow-600 focus:outline-none  focus:ring-1 focus:ring-yellow-800 focus:border-yellow-600 focus:outline-none focus:border-yellow-800 focus:ring ring-yellow-800 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
