<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Concessionária</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><!-- chama o css do bootstrap -->
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Relâmpago</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            <!-- Home -->
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>

            <!-- Funcionários -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Funcionários
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=cadastrar-funcionario">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-funcionario">Listar</a></li>
              </ul>     
            </li>

            <!-- Clientes -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Clientes
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=cadastrar-cliente">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-cliente">Listar</a></li>
              </ul>
            </li>

            <!-- Marcas -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Marcas
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=cadastrar-marca">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-marca">Listar</a></li>
              </ul>
            </li>

            <!-- Modelos -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Modelos
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=cadastrar-modelo">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-modelo">Listar</a></li>
              </ul>
            </li>

            <!-- venda -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Venda
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=cadastrar-venda">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-venda">Listar</a></li>
              </ul>
            </li>

          </ul>

          <!-- Barra de pesquisa -->
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <?php
                    // Arquivo de conexão
                    include('config.php');
                    
                    // Verifica qual página deve ser carregada
                    switch (@$_REQUEST['page']) {

                        // Funcionário
                        case 'cadastrar-funcionario':
                            include('cadastrar-funcionario.php');    
                            break;
                        case 'listar-funcionario':
                            include('listar-funcionario.php');    
                            break;
                        case 'editar-funcionario':
                            include('editar-funcionario.php');    
                            break;
                        case 'salvar-funcionario':
                            include('salvar-funcionario.php');    
                            break;    

                        // Cliente
                        case 'cadastrar-cliente':
                            include('cadastrar-cliente.php');    
                            break;
                        case 'listar-cliente':
                            include('listar-cliente.php');    
                            break;
                        case 'editar-cliente':
                            include('editar-cliente.php');    
                            break;
                        case 'salvar-cliente':
                            include('salvar-cliente.php');    
                            break;    

                        // Marca
                        case 'cadastrar-marca':
                            include('cadastrar-marca.php');    
                            break;
                        case 'listar-marca':
                            include('listar-marca.php');    
                            break;
                        case 'editar-marca':
                            include('editar-marca.php');    
                            break;
                        case 'salvar-marca':
                            include('salvar-marca.php');    
                            break;    

                        // Modelo
                        case 'cadastrar-modelo':
                            include('cadastrar-modelo.php');    
                            break;
                        case 'listar-modelo':
                            include('listar-modelo.php');    
                            break;
                        case 'editar-modelo':
                            include('editar-modelo.php');    
                            break;
                        case 'salvar-modelo':
                            include('salvar-modelo.php');    
                            break;    

                        // venda 
                        case 'cadastrar-venda':
                            include('cadastrar-venda.php');    
                            break;
                        case 'listar-venda':
                            include('listar-venda.php');    
                            break;
                        case 'editar-venda':
                            include('editar-venda.php');    
                            break;
                        case 'salvar-venda':
                            include('salvar-venda.php');    
                            break;    

                        // Página padrão
                        default:
                            print "<h1>Sejam Bem-Vindo ao sistema do Relâmpago</h1>";
                            break;
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Script do Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
