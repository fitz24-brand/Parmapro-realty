<button style="color:black; background-color: blue;" {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2  bg-blue-400 hover:bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  focus:border-blue-900 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
