<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Todo List</h1>
  <form action="">
    @csrf
    <input type="text" name="content">
    <input type="submit" value="追加">
  </form>
</body>
</html>