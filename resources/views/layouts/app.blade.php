<!DOCTYPE html>
<html lang="id">
<head>
  @include('layouts.partials.head')
  @stack('styles')
</head>
<body>
  <div class="wrapper">
    @include('layouts.partials.sidebar')

    <div class="main-panel">
      @include('layouts.partials.navbar')

      <div class="container">
        <div class="page-inner">
          @yield('content')
        </div>
      </div>

      @include('layouts.partials.footer')
    </div>
  </div>

  @include('layouts.partials.scripts')
  @stack('scripts')
</body>
</html>
