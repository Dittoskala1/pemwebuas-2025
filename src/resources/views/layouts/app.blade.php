<!DOCTYPE html>
<html lang="en">
  @include('components.partials.head')
  <body>

    @include('components.partials.navbar')

    {{-- Hero section (di luar main) --}}
    @yield('hero')

    <main id="main">
      @yield('content')
    </main>

    @include('components.partials.footer')

    {{-- Scripts --}}
  @include('components.partials.script')
    

  </body>
</html>
