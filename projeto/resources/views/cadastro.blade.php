<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet">

    <title>Cadastro</title>
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

        <div class="principal">
            <div class="blocoprincipal">

                <div class="bloco-cor">
                  <div class="titulo_colorido">
                    <h1 class="bloco-login-mensagem">Faça seu cadastro!</h1>
                  </div>
                </div>
          
                <div class="bloco_cadastro">
                  <div class="container-formulario">
          
                    <form class="formulario" method="post" enctype="multipart/form-data">
                   
                    <p style="color: red;">Por favor, corrija os erros abaixo:</p>
                    
                      <div class="campos">
                        <label for="nome">Nome</label>
                     
                      </div>
                      
                      <div class="campos">
                        <label for="usuário">Nome de usuário</label>
                    
        
                      </div>
          
                      <div class="campos">
                        <label for="email">E-mail</label>
                       
                      </div>
          
                      <div class="campos">
                        <label for="telefone">Telefone</label>
                       
                
                      </div>
          
                      <div class="campos">
                        <label for="id_password">Senha</label>
                      
                        <a class="hero-btn" href="{{ route('cadastro') }}">Já possui cadastro?</a>
                      </div>
                  
                      <button type="submit" class="btn-env">Cadastrar</button>
                    </form>
                  </div>
                </div>
            </div>

        </div>        
    </main>
    
  </body>
</html>