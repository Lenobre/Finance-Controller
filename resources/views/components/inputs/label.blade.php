<label {{ $attributes->merge(['class' => 'text-base text-black dark:text-white text-sm']) }}>
    {{ $slot }}
    @if ($attributes->has('required'))
        <span class="text-red-500">*</span>
    @endif
</label>
