@props(['options', 'keyValue', 'keyInside', 'id', 'name', 'label'])
<x-input-label for="{{ $id }}" :value="__($label)" :isRequire=true />
<select id="{{ $id }}" name={{ $name }}
    {{ $attributes->merge([
        'class' =>
            ($errors->has($name) ? 'border border-red-500' : 'border border-gray-300') .
            ' bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
    ]) }}>
    <option>Select a {{ $label }}</option>
    @foreach ($options as $option)
        <option value="{{ $option[$keyValue] }}" @selected(old($name) == $option[$keyValue])>
            {{ $option[$keyInside] }}
        </option>
    @endforeach
</select>
<x-input-error :messages="$errors->get($name)" class="mt-2" />
