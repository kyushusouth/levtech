<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>編集画面</h1>
    <form action="/posts/{{$id}}" method="POST">
        @method("PUT")
        @csrf
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" value="{{$data->title}}">
        </div>
        <div>
            <label for="body">本文</label>
            <textarea name="body" cols="30" rows="10">{{$data->body}}</textarea>
        </div>
        <input type="submit" value="保存">
    </form>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <a href="/">TOPに戻る</a>
</body>
</html>
