<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

  
    <title>Biblioteca </title>
  </head>
  <body>
    <main>
      <header>
        <nav class="navbar">
            <div class="logo-and-search">
                <div class="logo">
                   <h1>Library</h1>
                </div>
                <span class="divider">|</span>
                <div class="nav-links">
                    <input type="text" class="search-bar" placeholder="Pesquise">
                </div>
              </div>
        <div class="direita">
            <ul class="nav-right">
              <li><a href="{% url 'home' %}">Home</a></li>
              <li><a href="{% url 'estante' %}">Estante</a></li>
              <li><a href="{% url 'biblioteca' %}">Biblioteca</a></li>
              <li><a href="{% url 'login' %}">Login</a></li>
            </ul>
        </div>
    </nav>
      </header>

      <div class="fundo-azul">
        <div class="wrapper content">
          <img
            class="hero-img"
            src="{{ asset('imgs/library2.svg') }}"
          />

          <div class="hero-content">
            <img src="/public/imgs/it.webp" />
            <h1>LIBRARY</h1>
            <h2>Venha fazer parte!</h2>
            <h3>
              Um acervo pessoal para você se orgaizar.
            </h3>
            <a class="hero-btn" href="{{ route('cadastro') }}">Cadastrar Agora</a>
          </div>
        </div>
      </div>
      <footer></footer>
    </main>
  </body>
</html>