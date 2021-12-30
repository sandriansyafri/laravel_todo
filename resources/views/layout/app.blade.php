<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('before-style')
    @include('layout.part.style')
    @stack('after-style')
    <title>{{ $title }} | {{ env('APP_BRAND') }}</title>
  </head>
  <body>


    <x-navbar-component></x-navbar-component>

      <div class="container">
            {{ $slot }}
      </div>
      @stack('before-script')
      @include('layout.part.script')
      @stack('after-script')
  </body>
</html>