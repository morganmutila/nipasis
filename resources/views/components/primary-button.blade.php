<button {{ $attributes->merge(['type' => 'submit', 'class'=> 'w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-800 focus:outline-none focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none']) }}>
    {{ $slot }}
</button>