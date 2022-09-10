<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>

        <!-- navigation -->
      <header>
        <div class="container">
            @yield('header')
            <h1>ini header</h1>
        </div>
      </header>
        <main>
            @yield('main')
          <h2>
            <div class="container">
                <h2>
                    <a href="{{ route('page1') }}">link to pag1</a>
                </h2>
            </div>
          </h2>
        </main>
        <!-- footer -->
      <footer>
        <div class="container">
            @yield('footer')
            <h1>
                ini footer
            </h1>
        </div>
      </footer>
        <!-- Javascript-->
        <!-- Libs JS -->
        <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
      
      </body>
      
      </html>
