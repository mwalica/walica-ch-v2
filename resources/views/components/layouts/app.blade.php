<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'walica.ch' }}</title>
</head>
<body class="bg-[url('../images/sun-tornado.svg')] bg-no-repeat bg-center bg-cover min-h-screen flex! flex-col">
<div class="h-1 bg-gradient-to-r from-violet-600 via-red-500  to-orange-500"></div>
    {{-- Header --}}
    <flux:header
        class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 flex items-center justify-center">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left"/>
        <flux:navbar class="-mb-px max-lg:hidden gap-8">
            <flux:navbar.item href="/">Home</flux:navbar.item>
            <flux:navbar.item href="/about">O mnie</flux:navbar.item>
            <flux:navbar.item href="/photostock">Photostock</flux:navbar.item>
        </flux:navbar>
    </flux:header>
    {{-- Mobile sidebar --}}
    <flux:sidebar collapsible="mobile" sticky
                  class="lg:hidden border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.header>
            <flux:sidebar.collapse class="lg:hidden"/>
        </flux:sidebar.header>
        <flux:sidebar.nav variant="outline">
            <flux:sidebar.group>
                <flux:sidebar.item href="/">
                    Home
                </flux:sidebar.item>
                <flux:sidebar.item href="/about">
                    O mnie
                </flux:sidebar.item>
                <flux:sidebar.item href="/photostock">
                    Photostock
                </flux:sidebar.item>
            </flux:sidebar.group>
        </flux:sidebar.nav>
        <flux:sidebar.spacer/>
    </flux:sidebar>
    <flux:main container class="flex-grow">
        {{ $slot }}
    </flux:main>
    <footer class="flex py-4 justify-center">
        <flux:text class="text-sm/6">&copy; {{date('Y')}} Marek
            Walica
        </flux:text>
    </footer>
@fluxScripts
</body>
</html>
