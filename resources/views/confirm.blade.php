<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 確認
 {{ $name }}
 {{ $email }}
 <form action="{{ route('form.send')}}" method="post">
        @csrf
        <label for="name">名前</label>
        <input type="hidden" name="name" id="name" value="{{ $name }}">
        <label for="email">メールアドレス</label>
        <input type="hidden" name="email" id="email" value="{{ $email }}">
        <button type="submit">送信</button>
    </form>
</body>
</html>
