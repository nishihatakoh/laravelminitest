<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>フォーム</title>
</head>
<body>
  <form action="/result" method="POST" >
    @csrf
    <p>氏名</p>
    <input type="text">
    <p>メールアドレス</p>
    <input type="email">
    <input type="submit">
  </form>
</body>
</html>