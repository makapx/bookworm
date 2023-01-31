<!DOCTYPE html>
<html data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
            <title> Books </title>
    </head>
    <body>
        <navbar class="navbar bg-primary text-primary-content">
            <a href="/" class="btn btn-ghost normal-case text-xl">
                Bookworm
            </a>
        </navbar>
        <section class="m-8">
            <h1 class="mb-4">Books list</h1>
            @if ($books->isEmpty())
                <p>There are no books in the database.</p>
                <p>Why not add one?</p>
            @endif
            <ul class="grid grid-flow-col grid-cols-3">
            @foreach ($books as $book)
                <li class="card w-96 bg-base-300 p-8 shadow-xl">
                    ID: {{ $book->id }}<br>
                    Title: {{ $book->title }}<br>
                    ISBN: {{ $book->isbn }}<br>
                    Description: {{ $book->description }}<br>
                    Published: {{ $book->published }}<br>
                    Author: {{ $book->author->name }}<br>
                    Publisher: {{ $book->publisher->name }}<br>
                    Genre: {{ $book->genre->name }}<br>
                </li>
            @endforeach
            </ul>
        </section>

        <section class="m-8 grid grid-flow-col grid-cols-5 gap-4">
            <a class="btn btn-outline btn-primary" href="{{ route('books.create') }}">Add a book</a>
            <a class="btn btn-outline btn-secondary" href="/">Home</a>
        </section>
    </body>
</html>