<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    <nav>
        <a href="/">Home</a>
        <a href="/master-obat-bpom" wire:navigate>
            Master Obat BPOM
        </a>
    </nav>
    <!-- Navigation Bar -->
    {{ $slot }}
</body>

</html>
