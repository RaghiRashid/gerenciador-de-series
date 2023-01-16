<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid m-2">
      <a class="navbar-brand" href="/series"><h2 class="text-primary">Home</h2></a>
        @auth
          <a class="navbar-brand" href="{{ route('logout') }}"><h2 class="text-primary">Sair</h2></a>
        @endguest
        @guest
          <a class="navbar-brand" href="{{ route('logout') }}"><h2 class="text-primary">Entrar</h2></a>
        @endguest
    </div>
  </nav>
</header>