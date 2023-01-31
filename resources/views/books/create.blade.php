<!DOCTYPE html>
<html data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
            <title> Add a book </title>
    </head>
    <body>
        <navbar class="navbar bg-primary text-primary-content">
            <a href="/" class="btn btn-ghost normal-case text-xl">
                Bookworm
            </a>
        </navbar>
        <section class="m-8">
            <div class="mb-4">Add a book or <a class="underline" href="{{ route('books.index') }}">go back to book list</a></div>
            <form class="card w-96 bg-base-300 p-8 shadow-xl" action="/books" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="title">Title</label>
                    <input class="input input-sm input-bordered w-full max-w-xs" type="text" name="title" id="title" required>
                </div>
                <div class="mb-4">
                    <label for="author_id">Author</label>
                    <select class="select select-sm w-full max-w-xs" name="author_id" id="author_id" required>
                        <option disabled selected>Pick an author</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="publisher_id">Publisher</label>
                    <select class="select select-sm w-full max-w-xs" name="publisher_id" id="publisher_id" required>
                    <option disabled selected>Pick a publisher</option>
                        @foreach ($publishers as $publisher)
                            <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="genre_id">Genre</label>
                    <select class="select select-sm w-full max-w-xs" name="genre_id" id="genre_id" required>
                        <option disabled selected>Pick a genre</option>
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="published">Year</label>
                    <input type="number" class="input input-sm input-bordered w-full max-w-xs" min="100" max="2099" step="1" name="published" id="published" placeholder="1990" required/>
                </div>
                <div class="mb-4">
                    <label for="isbn">ISBN</label>
                    <input class="input input-sm input-bordered w-full max-w-xs" type="text" name="isbn" id="isbn" placeholder="ISBN..." required>
                </div>
                <div class="mb-4">
                    <label for="description">Description</label>
                    <input class="input input-sm input-bordered w-full max-w-xs" type="text" placeholder="Description..." name="description" id="description" required>
                </div>
                <div class="mb-4">
                    <button class="btn btn-primary" type="submit">Add Book</button>
                </div>
            </form>
        </section>
    </body>
</html>