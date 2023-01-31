<!DOCTYPE html>
<html data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
            <title> Publishers list </title>
    </head>
    <body>
        <navbar class="navbar bg-primary text-primary-content">
            <a href="/" class="btn btn-ghost normal-case text-xl">
                Bookworm
            </a>
        </navbar>
        <section class="m-8">
            <h1>Publishers list</h1>
            @if ($publishers->isEmpty())
                <p>There are no publishers in the database.</p>
                <p>Why not add one?</p>
            @endif
            <ul>
                @foreach ($publishers as $publisher)
                    <li>{{ $publisher->name }}</li>
                @endforeach
            </ul>
        </section>

        <section class="m-8 grid grid-flow-col grid-cols-5 gap-4">
            <a class="btn btn-outline btn-primary" href="{{ route('publishers.create') }}">Add a publisher</a>
            <a class="btn btn-outline btn-secondary" href="/">Home</a>
        </section>
    </body>
</html>