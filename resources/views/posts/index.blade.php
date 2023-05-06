<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posts</title>
    <link rel="stylesheet" href="/css/style.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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

                <form action="/posts/{{$post->id}}" id="deleteButtonForm" method="post">
                    @csrf
                    @method("delete")
                    <button type="button" id="deleteButton">削除</button>
                </form>
            </section>
        @endforeach
    </article>

    <a href="/posts/create">create</a>

    <div class="pagination">
        {{$posts->links("vendor.pagination.default")}}
    </div>
    <p>{{asset("js/app.js")}}</p>
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>
