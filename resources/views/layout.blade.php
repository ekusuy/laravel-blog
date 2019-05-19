<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Blog</title>
  <!-- ① CSS を追加 -->
  <link rel="stylesheet" href="/css/app.css">

  <!-- ② JavaScript を追加 -->
  <script src="/js/app.js" defer></script>
</head>
<body>

  <div class="container py-4">
    @yield('content')
  </div>

</body>
</html>
