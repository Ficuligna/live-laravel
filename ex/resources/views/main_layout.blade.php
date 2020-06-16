<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include ("header")

    <main>
      @yield("content")
    </main>

    @include ("footer")

  </body>
</html>
