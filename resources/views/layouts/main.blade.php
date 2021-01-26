<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('css/style.css') }}"/>
    <title>Namphueng's book store - @yield('title')</title>
  </head>
  <body>
    <header>
      <h1>Namphueng's book store - @yield('title')</h1>
      <nav>
       <a href="/product">Product</a>
       <a href="/category">Category</a>
      </nav>
    </header>
    <main>
      @yield('content')
    </main>
  <footer>
    &#xA9; Copyright Week-03, 2020 Namphueng's book store 
  </footer>
  </body>
</html>
