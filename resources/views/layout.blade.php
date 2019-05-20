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
  @include('navbar')

  <div class="container py-4">
    {{-- フラッシュメッセージの表示 --}}
    @if(session('message'))
      <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    {{-- コンテンツの表示 --}}
    @yield('content')
  </div>

</body>
</html>
