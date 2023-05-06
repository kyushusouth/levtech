<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posts</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>blog title</h1>
        <nav>
            <ul>
                <li>menu</li>
                <li>menu</li>
                <li>menu</li>
                <li>menu</li>
            </ul>
        </nav>
    </header>

    <article>
        @foreach ($posts as $post)
            <section>
                <h2>
                    <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                </h2>
                <p>{{$post->body}}</p>
                <a href="/posts/{{$post->id}}/edit">編集</a>
            </section>
        @endforeach
    </article>

    <a href="/posts/create">create</a>

    <div class="pagination">
        {{$posts->links("vendor.pagination.default")}}
    </div>
</body>
</html>
