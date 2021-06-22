<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-3 border border-transparent rounded-md font-semibold tracking-widest text-black bg-gradient-to-r from-coffee to-dark-coffee hover:text-white hover:from-dark-coffee hover:to-coffee focus:outline-none  focus:ring-1 focus:ring-dark-coffee focus:border-coffee focus:outline-none focus:border-dark-coffee focus:ring ring-dark-coffee disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
