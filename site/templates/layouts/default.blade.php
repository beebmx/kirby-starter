<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>{{ $site->title() }} | {{ $page->title() }}</title>
  <style>
    body{
      position:absolute;top:0;left:0;right:0;bottom:0;
    }
    body > .preventive{
      position:absolute;top:50%;-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);width:100%;
    }
    body > .preventive img{
      display:block;margin:0 auto;max-width:250px;width:35%;
    }
  </style>
</head>
<body>
@yield('content')
</body>
</html>
