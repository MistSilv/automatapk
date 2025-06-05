<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appk</title>

  @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
  <h1>Apk automaty</h1>
  <p>lista produktów.</p>
  
  <a href="/products" class="btn mt-4 inline-block text-black">
    Produkty
  </a>
</body>
</html>