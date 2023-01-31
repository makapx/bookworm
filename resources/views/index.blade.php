<!DOCTYPE html>
<html data-theme="dark">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
        <title> Welcome to Bookworm! </title>
    </head>
    <body>
        <navbar class="navbar bg-primary text-primary-content">
            <a href="/" class="btn btn-ghost normal-case text-xl">
                Bookworm
            </a>
        </navbar>

        <section class="m-8">
            Welcome to Bookworm!
            This is a simple CRUD application for books.
            Let's get started!
        </section>

        <section class="m-8 grid grid-flow-col gap-4">
            <a class="btn btn-outline btn-primary" href="/authors">Authors</a>
            <a class="btn btn-outline btn-primary" href="/books">Books</a>
            <a class="btn btn-outline btn-primary" href="/publishers">Publishers</a>
            <a class="btn btn-outline btn-primary" href="/genres">Genres</a>
        </section>
    </body>
</html>
