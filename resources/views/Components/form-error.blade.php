@props(['name'])

@error($name)
    <div class="text-red-500 mt-2">{{ $message }}</div>
@enderror