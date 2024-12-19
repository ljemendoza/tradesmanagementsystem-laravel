<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    {{-- <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <livewire:layout.sidebar2 />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body> --}}
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 md:pl-64">
            
            <header class="flex items-center h-20 md:h-auto" x-data="{ open: false }">
                <nav class="relative flex items-center w-full px-4">
                    <!-- Mobile Header -->
                    <div class="inline-flex items-center justify-center w-full md:hidden">
                        <button @click="open = true" @click.away="open = false" class="absolute left-0 pl-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 stroke-blue-600" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16" />
                            </svg>
                        </button>
                        <a href="">
                            <h2 class="text-2xl font-extrabold text-blue-600">{{ config('app.name', 'Laravel') }}</h2>
                        </a>
                    </div>
                    <livewire:layout.sidebar />
                    
                </nav>
            </header>

            <!-- Page Heading -->
            <div class="h-auto py-3.5 bg-white dark:bg-gray-800 shadow">
                <div class="w-full px-3.5 mx-auto">
                    <div class="flex flex-wrap -mx-3.5 items-center">
                        <div class="flex-[0_0_100%] max-w-full w-full relative px-3.5">
                            <!-- Breadcrumbs -->
                            {{-- <nav class="text-blue-100">
                                {{ $breadcrumb }}
                            </nav> --}}
                            <!-- Title -->
                            {{ $header }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <main class="container min-h-[200px] pt-8 w-full px-4 mx-auto">
                {{ $slot }}
            </main>
            
        </div>
    </body>
</html>
