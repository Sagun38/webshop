<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/base.css" type="text/css">
  </head>
  <body>

    <header>
          <nav class="navbar navbar-default">
              <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="/">Application</a>
                  </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/">Accueil</a></li>
          <li><a href="contact">Contact</a></li>
          <li><a href="magasin">Magasin</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @if (Auth::check())
          {{-- POUR VERIF SI L'UTILISATEUR EST CONNECTER LUI AFFICHER JUSTE DECO --}}
              <li><a href="panier">Panier</a></li>
              <li><a href="logout">Déconnexion</a></li>
          @else
          {{-- POUR VERIF SI L'UTILISATEUR EST PAS CONNECTER LUI AFFICHER S'ENREGISTRER ET SE CONNECTER --}}
              <li><a href="register">S'enregistrer</a></li>
              <li><a href="login">Connexion</a></li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
    </header>
    <div class="container">@yield('content')</div>

    <footer>
      <p>Copyright : Loick Amblard 2017</p>
      <a href="/">Accueil</a>
      <a href="contact">Contact</a>
      <a href="magasin">Magasin</a>
      <a href="register">Register</a>
      <a href="login">Login</a>
      <a href="logout">Logout</a>
    </footer>
    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
