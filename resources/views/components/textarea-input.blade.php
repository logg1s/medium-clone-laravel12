@props(['disabled' => false, 'value' => ''])

<textarea @disabled($disabled)
    {{ $attributes->merge([
        'class' =>
            ($errors->has($attributes->get('name')) ? 'border-red-500' : 'border-gray-300') .
            ' focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm',
    ]) }}>{{ $value ?? $slot }}</textarea>
