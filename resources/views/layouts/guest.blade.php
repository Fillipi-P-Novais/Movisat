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

        <style>
            :root {
                --cor-vermelho: #eb3528;
                --cor-laranja: #ee8424;
                --cor-rosa: #c91b4a;
                --cor-azul: #3baed6;
                --cor-verde: #b5d345;
            }
        
            body {
                background-color: white; /*var(--cor-azul)*/
            }
        
            .login-card {
                background-color: white;
                border-radius: 0.75rem;
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            }
        
            .btn-login {
                background-color: var(--cor-vermelho);
                color: white;
                transition: background-color 0.3s ease;
            }
        
            .btn-login:hover {
                background-color: var(--cor-laranja);
            }
        
            .login-label {
                color: var(--cor-rosa);
            }
        
            .login-link {
                color: var(--cor-verde);
            }
        
            .login-link:hover {
                text-decoration: underline;
            }
        </style>
       
    </head>
    <body class="font-sans text-gray-900 antialiased"> {{-- --}}
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background-color: #3baed6;"> {{-- bg-gray-100 dark:bg-gray-900 --}}
            <div>
                {{-- <a href="">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a> --}}
                {{-- <img class="" src="{{asset('assets/img/logo_preto.png')}}" id="icon" alt="User Icon"/> --}}
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg login-card"> {{-- bg-white dark:bg-gray-800 shadow-md overflow-hidden--}}
                <img class="" src="{{asset('assets/img/logo_preto.png')}}" id="icon" alt="User Icon"/>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
