<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('form.confirm')}}" method="post">
        @csrf
        <label for="name">名前</label>
        <input type="text" name="name" id="name">
        <label for="email">メールアドレス</label>
        <input type="email" name="email" id="email">
        <button type="submit">送信</button>
    </form>
</body>
</html>
