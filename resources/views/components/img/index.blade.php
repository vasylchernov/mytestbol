@props(['src' => null, 'name' => 'def_name'])

<img src="{{ $src == null ? asset('storage/images/nature.jpg') : $src }}" alt="{{ $name }}" loading="lazy">
