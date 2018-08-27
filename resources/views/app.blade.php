<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Icon -->
    <link rel="icon" href="/img/ico/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
    <style>
        body{
            padding-top: 5rem;
            padding-bottom: 6rem;
        }

        footer{
            padding-bottom: 1rem;
        }
    </style>

    <title>Sistema de Gerenciamento de Processos</title>
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand fixed-top navbar-dark bg-dark justify-content-between">
          <a class="navbar-brand" href="/">
              eCompras 
          </a> 
          <ul class="navbar-nav">
              <li class="navbar-item">
                  <a class="nav-link" href="#">Usuário</a>
              </li>
              <li class="navbar-item">
                  <a class="nav-link" href="#">Sair</a>        
              </li>
          </ul>
      </nav>  
    </header>

    <main class="container-fluid">
      <div class="row">
          <div class="col-md-2">
              <ul class="list-group">
                  <li class="list-group-item"><a href="/compras">Compras</a></li>    
                  <li class="list-group-item"><a href="/licitacoes">Licitatórios</a></li>    
                  <li class="list-group-item"><a href="/dados">Dados</a></li>    
                  <!--<li class="list-group-item"><a href="#">Relatórios</a></li>-->
              </ul>   
          </div> 
        

          <div class="col-md-10">

            @yield('content')
            </div>

      </div>
    </main>

    <footer class="container-fluid fixed-bottom bg-light">
        <hr>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <h6>IFMS - Trabalho de Conclusão de Curso @ 2018</h>    
                </div> 
                <div class="col-md-1">
                    <a href="https://github.com/cavalcanteulysses/ulyssescavalcante.ifms.tcc" target="_blank" title="Github do Projeto"><i class="fab fa-github fa-lg"></i></a>
                </div> 
            </div>
        </div>
    </footer>





<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>