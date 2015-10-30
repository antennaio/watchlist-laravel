<!doctype html>

<head>
  <title>React.js + Laravel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.4/semantic.min.css">
  <link rel="stylesheet" href="{{ elixir("css/app.css") }}">
</head>

<html>
  <body>
    <div id="app" data-csrf-token="{{ csrf_token() }}"></div>
    <script src="{{ elixir("js/app.js") }}"></script>
  </body>
</html>
