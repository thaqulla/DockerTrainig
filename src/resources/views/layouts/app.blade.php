<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
<link rel="stylesheet" href="{{ mix('css/app.css' )}}">

</head>

<body style="padding: 60px 0;">
  @include('layouts.header')

  <main>
    <article>
      <div class="container">
        <h1 class="fs-2 my-3">@yield('title')</h1>

        <div id="app" class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
          <example-component></example-component>
          <div class="grid grid-cols-1 md:grid-cols-2"></div>
        </div>
        <!-- Hello.vue -->
        <div id="hello">
          <hello-component></hello-component>
          <test-component></test-component>
        </div> 
        <script>
          // window.alert("test");
        </script>
        @yield('content')
      </div>
    </article>
  </main>

  @include('layouts.footer')
</body>
<script src="{{ mix('js/app.js') }}"></script>
</html>