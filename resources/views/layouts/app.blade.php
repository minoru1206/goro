<!DOCTYPE html>
<html>
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167412453-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-167412453-1');
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="簡単に英語を覚えられるように楽しくて面白い例文で覚えられる英単語のゴロとクイズのサイトです。英語学習を始める小学生、中学生から受験や旅行、ビジネスなどにも活用できます。楽しく英語を覚えていってくださいな！" />
    <meta property="og:url" content="https://gorotan-english.work/" />
    <meta property="og:description" content="簡単に英語を覚えられるように楽しくて面白い例文で覚えられる英単語のゴロとクイズのサイトです。英語学習を始める小学生、中学生から受験や旅行、ビジネスなどにも活用できます。楽しく英語を覚えていってくださいな！このサイトでは、単語の意味とその読み方と覚え方がある例文があるので、楽に英語学習ができます。" />
    <meta property="og:image" content="https://www.gorotan-english.work/images/header-logo.png" />
    <meta property="og:site_name" content="【英語】楽しく語呂で英語を覚えるための、面白い英単語のクイズ！" />
    <meta name="google-site-verification" content="seNyghQr4dGx-JL0KXXW3RTOBFPshOHQaBSUwEE4aDo" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content=@gorotan_english" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link href="/css/app.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="api-token" content="{{ session()->get('api_token') ?? '' }}">
    <title>【英語】楽しく語呂で英語を覚えるための、面白い英単語のクイズ！</title>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">

  </head>
  <body>
    <body>
      <div id="app">
        <app :errors="{{ $errors }}" :auth="{{ Auth::user() ?? '[]' }}"/>
      </div>
      <script src="/js/app.js"></script>
  </body>
</html>