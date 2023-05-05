<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posts</title>
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
        <section>
            <h2>title</h2>
            <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        </section>
        <section>
            <h2>title</h2>
            <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        </section>
        <section>
            <h2>title</h2>
            <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        </section>
    </article>

    @foreach ($data as $d)
        <p>{{$d}}</p>
        <p>{{$d["id"]}}</p>
        <p>{{$d["created_at"]}}</p>
    @endforeach
</body>
</html>
