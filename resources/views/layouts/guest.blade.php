<!DOCTYPE html>
<html lang="id">
<head>
  @include('layouts.partials.head')
  @stack('styles')
</head>
<body>
  @yield('content')

  @include('layouts.partials.scripts')
  @stack('scripts')
</body>
</html>
