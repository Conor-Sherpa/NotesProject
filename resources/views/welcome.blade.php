<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sherpa Notes Project</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <h1 class="text-2xl font-bold">Sherpa Notes Project</h1>
                </div>

                <p class="block mt-4">Head to <code class="px-3 py-2 bg-white border border-gray-200">/user/{id}</code> to get started.</p>

                <p class="mt-4 text-sm">Note: remember to create a user using the User factory first!</p>
            </div>
        </div>
    </body>
</html>
