<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h2>title</h2>
        <nav>
            <ul>
                <li>menu</li>
                <li>menu</li>
                <li>menu</li>
                <li>menu</li>
            </ul>
        </nav>
        <ol>
            <li>posts</li>
            <li>{{$id}}</li>
        </ol>
    </header>
    <article>
        <h1>{{$data->title}}</h1>
        <p>{{$data->body}}</p>
        <a href="/">page back</a>
    </article>
</body>
</html>
