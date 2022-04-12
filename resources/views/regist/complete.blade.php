<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>登録完了画面</title>
</head>
<body>
  {{ $user->name }}さんを登録しました
  <p><a href="{{ url('home') }}">ホーム画面へ</a></p>
</body>
</html>
