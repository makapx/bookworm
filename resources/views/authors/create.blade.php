<html data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
            <title> Add an author </title>
    </head>
    <body>
        <navbar class="navbar bg-primary text-primary-content">
            <a href="/" class="btn btn-ghost normal-case text-xl">
                Bookworm
            </a>
        </navbar>

        <section class="m-8">
            <div class="mb-8" >Add an author or <a class="underline" href="{{ route('authors.index') }}">go back to authors list</a></div>
            <form class="card w-96 bg-base-300 p-8 shadow-xl" method="POST" action="/authors">
                @csrf
                <div class="mb-8">
                    <label for="name">Author name</label>
                    <input class="input input-sm input-bordered w-full max-w-xs" type="text" name="name" placeholder="Author name" required>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Create Author</button>
                </div>
            </form>
        </section>
</body>
</html>