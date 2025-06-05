<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>automatapk</title>

  @vite('resources/css/app.css')
</head>
<body>

  <header>
    <nav>
      <h1>App Name xd</h1>
      <a href="/products"> 
        Products
      </a>
      
      <a href="/automaty">
        Automaty
      </a>
     
    </nav>
  </header>

  <main class="container">
    {{ $slot }}
  </main>

</body>
</html>