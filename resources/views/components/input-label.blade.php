@props(['value', 'isRequire' => false])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}

    @if ($isRequire)
        <span class="text-red-500">*</span>
    @endif
</label>
