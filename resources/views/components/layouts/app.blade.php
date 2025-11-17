<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
          content="Marek, Walica, music, photo, photography, web, creation, photostock, shutterstock, fotolia, istock, pond5, stockphotography, foto, fotograf, muzyka, flecista, flet, poprzeczny, portfolio, blog, mobile app, education, nauczyciel, aplikacje mobilne, jetpack compose, laravel">
    <meta name="author" content="Marek Walica">
    <meta name="description" content="Marek Walica - muzyka, fotografia, edukacja">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Marek Walica - muzyka, fotografia, edukacja' }}</title>
</head>
<body class="bg-[url('../images/sun-tornado.svg')] bg-no-repeat bg-center bg-cover min-h-screen flex! flex-col">
<div class="h-1 bg-gradient-to-r from-violet-600 via-red-500  to-orange-500"></div>
{{-- Header --}}
<flux:header
    class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 flex items-center justify-center w-full">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left"/>
    <flux:navbar class="-mb-px max-lg:hidden gap-8">
        <flux:navbar.item href="/" wire:navigate>Home</flux:navbar.item>
        <flux:navbar.item href="/about" wire:navigate>O mnie</flux:navbar.item>
        <flux:navbar.item href="/photostock" wire:navigate>Photostock</flux:navbar.item>
        <flux:dropdown class="max-lg:hidden">
            <flux:navbar.item icon:trailing="chevron-down">Admin</flux:navbar.item>
            <flux:navmenu>
                @auth
                    <flux:navbar.item href="/admin/photo/create" label="Create" :current="false" wire:navigate>Dodaj
                        zdjęcie
                    </flux:navbar.item>
                    <flux:navbar.item href="/admin/photo/list" label="Photos" :current="false" wire:navigate>Zdjęcia
                    </flux:navbar.item>
                    <flux:navbar.item href="/logout" icon="arrow-right-start-on-rectangle" label="Logout"
                                      :current="false" wire:navigate>Logout
                    </flux:navbar.item>
                @endauth
                @guest
                    <flux:navbar.item href="/login" icon="arrow-right-end-on-rectangle" label="Login" :current="false"
                                      wire:navigate>Login
                    </flux:navbar.item>
                @endguest
            </flux:navmenu>
        </flux:dropdown>
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
            <flux:sidebar.item href="/" wire:navigate>
                Home
            </flux:sidebar.item>
            <flux:sidebar.item href="/about" wire:navigate>
                O mnie
            </flux:sidebar.item>
            <flux:sidebar.item href="/photostock" wire:navigate>
                Photostock
            </flux:sidebar.item>
        </flux:sidebar.group>
    </flux:sidebar.nav>
    <flux:sidebar.spacer/>
</flux:sidebar>
<flux:main container class="flex-grow flex justify-center">
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
