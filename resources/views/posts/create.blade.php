<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>投稿用ページ</h1>
    <form action="/posts" method="POST">
        @csrf
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" value="{{old("title")}}">
        </div>
        <div>
            <label for="body">内容</label>
            <textarea name="body" cols="30" rows="10">{{old("body")}}</textarea>
        </div>
        <div class="category">
            <h2>Category</h2>
            <select name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="store">
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
