<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Neptun Plus</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            margin: 0;
            line-height: inherit
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }
    </style>
</head>

<body>
    <div>
        <div>
            <div class="px-6">
                <header class="gap-2 py-10">
                    @if (Route::has('login'))
                        <nav class="flex-1">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="px-3 py-2">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="px-3 py-2">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="px-3 py-2">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>

                <main>
                    <div>
                        <h1>Neptun Plus</h1>
                    </div>
                </main>

                <footer class="py-16">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </footer>
            </div>
        </div>
    </div>
</body>

</html>
