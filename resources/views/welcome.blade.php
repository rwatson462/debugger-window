<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

    </head>
    <body>

        <header>
            <h1>Debugger</h1>
            <h2>Your replacement for <code>dump</code> and <code>var_dump</code></h2>
        </header>

        <main>
            @foreach(\App\Models\Post::all() as $post)
                <section>
                    {{ $post->title }}
                    {{ $post->content }}
                </section>
            @endforeach
        </main>

        <footer>
            <p>&copy;2023 Source Pot, Rob Watson</p>
        </footer>

    </body>
</html>
