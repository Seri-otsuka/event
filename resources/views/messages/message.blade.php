<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Mypage</title>
    
            <!-- Fonts -->
            <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        </head>
        <body>
          <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    相手の名前
                </h2>
            </x-slot>
        </body>
    </html>
</x-app-layout>