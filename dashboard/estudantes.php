<?php

include_once("../php/conect_db.php");
$estado = false;
$msg = 0;

$valor = 0;
$students = 0;
$cert = 0;
$msg = 0;

$sel0 = "SELECT * FROM mensagem";
$con0 = $conexao -> query($sel0);
$res0 = mysqli_fetch_Array($con0);
$quantos0= mysqli_num_rows($con0);

if ($quantos0>=1) {
  # code...
  $msg = $quantos0;
}


$sel = "SELECT * FROM cadastrado";
$con = $conexao -> query($sel);
$quantos= mysqli_num_rows($con);

if ($quantos>=1) {
  # code...
  $students = $quantos;
}


?>


<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="João afonso katombela , Gonçalo buta goncalves">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard | Se Deus Quiser</title>
    <link rel="shortcut icon" href="../img/logo_p.png" type="image/x-icon">


    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../fontawesome/css/all.css">
<link rel="stylesheet" href="../fontawesome/css/fontawesome.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      
.bg-primary{
  background: #de0877!important;
}


      body{
        overflow-x: hidden!important;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      .ml-lg-7{
        margin-left: 12.5rem;
      }
      .main{
        margin-left: 14rem;
      }
      table{
        margin-left: 1.5rem;
      }
      .w-90{
          width: 85%!important;
      }
      .h-table{
        margin-left: 14rem;
      }
      }

      .nav-item{
        color: white;
      }

      @media screen and (min-width: 700px) {
        nav{
          width: 11rem!important;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Se Deus Quiser</a>
  
  <input class="form-control form-control-primary w-100" style="border-radius: 20px;" type="text" placeholder="Pesquisar" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3 text-white" href="#">Sair</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row ">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-primary sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link ativo text-white " aria-current="page" href="index.php">
             
              <svg version="1.1" fill="white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <title>dashboard</title>
              <path d="M19.955 6.67c-2.036-2.036-4.848-3.295-7.955-3.295-6.213 0-11.25 5.037-11.25 11.25 0 0 0 0 0 0v0 4.125h6.75v-1.5h-5.25v-2.625c0-5.376 4.374-9.75 9.75-9.75s9.75 4.374 9.75 9.75v2.625h-5.25v1.5h6.75v-4.125c0-0.009 0-0.020 0-0.031 0-3.097-1.26-5.9-3.295-7.924l-0-0z"></path>
              <path d="M3.75 12.375h1.5v1.5h-1.5v-1.5z"></path>
              <path d="M11.25 6h1.5v1.5h-1.5v-1.5z"></path>
              <path d="M6.375 7.875h1.5v1.5h-1.5v-1.5z"></path>
              <path d="M18.75 12.375h1.5v1.5h-1.5v-1.5z"></path>
              <path d="M13.932 15.708l3.244-6.758-1.352-0.649-3.243 6.756c-0.177-0.037-0.379-0.058-0.587-0.058-1.66 0-3.007 1.346-3.007 3.007s1.346 3.007 3.007 3.007c1.66 0 3.007-1.346 3.007-3.007 0-0.92-0.413-1.743-1.063-2.294l-0.004-0.004zM12 19.5c-0.828 0-1.5-0.672-1.5-1.5s0.672-1.5 1.5-1.5c0.828 0 1.5 0.672 1.5 1.5v0c-0.001 0.828-0.672 1.499-1.5 1.5h-0z"></path>
              </svg>
              Dashboard
            </a>
          </li>
          
         
          <li class="nav-item">
            <a class="nav-link text-white" href="estudantes.php">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24" viewBox="0 0 24 24">
              <title>estudantes</title>
              <path d="M21.682 14.826l-3.016-1.974 1.161-2.129c0.269-0.5 0.427-1.093 0.428-1.724v-3.375c0-0.004 0-0.008 0-0.012 0-2.691-2.181-4.872-4.872-4.872-1.281 0-2.446 0.494-3.316 1.302l0.003-0.003 1.019 1.1c0.6-0.556 1.405-0.897 2.291-0.897 1.864 0 3.375 1.511 3.375 3.375 0 0.002 0 0.005 0 0.007v-0 3.375c-0 0.367-0.091 0.713-0.25 1.018l0.006-0.012-1.824 3.344 4.175 2.732c0.542 0.358 0.894 0.965 0.894 1.654 0 0.002 0 0.005-0 0.007v-0 2.508h-3.375v1.5h4.875v-4.008c0-0.003 0-0.006 0-0.009 0-1.211-0.62-2.277-1.56-2.898l-0.013-0.008z"></path>
              <path d="M14.932 16.326l-3.016-1.974 1.161-2.129c0.269-0.5 0.427-1.093 0.428-1.724v-3.375c-0.002-2.694-2.184-4.877-4.877-4.881h-0c-2.687 0-4.873 2.19-4.873 4.881v3.375c-0 0.005-0 0.011-0 0.017 0 0.624 0.156 1.212 0.432 1.726l-0.010-0.020 1.168 2.14-2.999 1.962c-0.953 0.629-1.573 1.695-1.573 2.905 0 0.002 0 0.004 0 0.006v-0l-0.023 4.012h15.754v-4.008c0-0.003 0-0.006 0-0.009 0-1.211-0.62-2.277-1.56-2.898l-0.013-0.008zM15.004 21.75h-12.746l0.015-2.508c0-0.002 0-0.004 0-0.007 0-0.689 0.352-1.295 0.887-1.649l0.007-0.005 4.157-2.72-1.831-3.356c-0.151-0.29-0.239-0.633-0.239-0.997 0-0.003 0-0.006 0-0.009v0-3.375c0-1.864 1.511-3.375 3.375-3.375s3.375 1.511 3.375 3.375v0 3.375c-0 0.367-0.091 0.713-0.25 1.018l0.006-0.012-1.824 3.344 4.175 2.732c0.542 0.358 0.894 0.965 0.894 1.654 0 0.002 0 0.005-0 0.007v-0z"></path>
              </svg>

              Estudantes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="ficha.php">
            <svg version="1.1" fill="#fff" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
            <title>ficha</title>
            <path d="M15.686 0.75h-13.436v22.5h19.875v-16.061zM20.625 7.811v0.064h-5.625v-5.625h0.064zM3.75 21.75v-19.5h9.75v7.125h7.125v12.375z"></path>
            </svg>

              Ficha de inscrição
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span class=" text-white">
            <svg version="1.1" fill="#fff" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24">
            <title>secretaria</title>
            <path d="M20.625 19.875v-15.75h-4.125v-3.515l-12.375 2.134v17.132h-3.375v1.5h4.074l11.676 1.611v-17.361h2.625v15.75h4.125v-1.5zM15 21.264l-9.375-1.293v-15.965l9.375-1.616z"></path>
            <path d="M12 10.875h1.5v3h-1.5v-3z"></path>
            </svg> Secretaria</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link text-white" href="add-course.php" id="add-c" style="cursor: pointer;">
            <svg version="1.1" fill="#fff" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
            <title>list-filter</title>
            <path d="M4.5 9.25h15v1.5h-15v-1.5z"></path>
            <path d="M7.875 14h8.25v1.5h-8.25v-1.5z"></path>
            <path d="M10.125 18.75h3.75v1.5h-3.75v-1.5z"></path>
            <path d="M2.25 4.5h19.5v1.5h-19.5v-1.5z"></path>
            </svg>

              Add Cursos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="ficha.php"> 
              <svg version="1.1" fill="#fff" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
              <title>add formado</title>
              <path d="M9.75 0.75c-2.898 0.003-5.247 2.352-5.25 5.25v3.735c0.001 0.658 0.17 1.277 0.468 1.815l-0.010-0.019 1.287 2.359-3.414 2.219c-1.033 0.676-1.706 1.828-1.706 3.137 0 0.002 0 0.005 0 0.007v-0 3.997h13.5v-1.5h-12v-2.497c0-0.001 0-0.003 0-0.004 0-0.785 0.404-1.477 1.015-1.877l0.009-0.005 4.578-2.976-1.952-3.578c-0.173-0.311-0.274-0.682-0.275-1.077v-3.735c0-2.071 1.679-3.75 3.75-3.75s3.75 1.679 3.75 3.75v0 3.735c-0 0.395-0.102 0.766-0.281 1.089l0.006-0.012-1.952 3.579 3.352 2.179v-1.789l-1.37-0.89 1.287-2.359c0.288-0.519 0.457-1.137 0.458-1.796v-3.735c-0.003-2.898-2.352-5.247-5.25-5.25h-0z"></path>
              <path d="M19.875 18.75v-3h-1.5v3h-3v1.5h3v3h1.5v-3h3v-1.5h-3z"></path>
              </svg>
              Add Formando
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../termos.php">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff" viewBox="0 0 24 24">
            <title>termos</title>
            <path d="M22.125 1.875h-20.25c-0.621 0.001-1.124 0.504-1.125 1.125v18.375c0.001 0.621 0.504 1.124 1.125 1.125h20.25c0.621-0.001 1.124-0.504 1.125-1.125v-18.375c-0.001-0.621-0.504-1.124-1.125-1.125h-0zM21.75 21h-19.5v-17.625h19.5z"></path>
            <path d="M5.436 13.248l3.443-3.875-3.443-3.871-1.121 0.997 2.557 2.875-2.557 2.878 1.121 0.996z"></path>
            <path d="M10.125 11.25h6v1.5h-6v-1.5z"></path>
            </svg>

              Termos
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-11 w-100 ms-sm-auto col-lg-11">
      <div class="d-flex main justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Estudantes frequentando o seu centro</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
         <div class="btn-group">
           <button class="btn" onclick="msg()" style="border-radius: 20px; color: #0066be; border: 1px solid #0066be;" disabled>Mensagens <span class="msg"><?=$msg?></span></button>
         </div>
          </div>
      </div>
        
          <div id="janela">
                   <div class="table ml-lg-7">
                    <table class="table table-striped table-bordered w-90 table-sm">
                      <thead>
                      <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nome</th>
                          <th scope="col">Telefone</th>
                          <th scope="col">Data</th>
                          <th scope="col">Cod. Inscrição</th>
                          <th scope="col">Obs</th>
                          <th scope="col">Pagamento</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        while ($dads = mysqli_fetch_array($con)) {
                         ?>
                      
                        <tr>
                          <td><?=$dads['id']?></td>
                          <td><?=$dads['nome']?></td>
                          <td><?=$dads['telefone']?></td>
                          <td><?=$dads['quando']?></td>
                          <td><?=$dads['code']?></td>
                          <td><?=$dads['obs']?></td>
                          <td><?=$dads['pagamento']?></td>
                        </tr>
                         <?php
                        }
                      ?>
                      </tbody>
                    </table>
                   
                  </div> <center><button class="btn botao" style="border-radius: 20px; border: 1px solid #0066be; color: #0066be; text-transform: uppercase; font-weight: bold; margin-left: 5rem;">baixar lista  <svg height="1em" class="mx-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M181.9 256.1c-5-16-4.9-46.9-2-46.9 8.4 0 7.6 36.9 2 46.9zm-1.7 47.2c-7.7 20.2-17.3 43.3-28.4 62.7 18.3-7 39-17.2 62.9-21.9-12.7-9.6-24.9-23.4-34.5-40.8zM86.1 428.1c0 .8 13.2-5.4 34.9-40.2-6.7 6.3-29.1 24.5-34.9 40.2zM248 160h136v328c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V24C0 10.7 10.7 0 24 0h200v136c0 13.2 10.8 24 24 24zm-8 171.8c-20-12.2-33.3-29-42.7-53.8 4.5-18.5 11.6-46.6 6.2-64.2-4.7-29.4-42.4-26.5-47.8-6.8-5 18.3-.4 44.1 8.1 77-11.6 27.6-28.7 64.6-40.8 85.8-.1 0-.1.1-.2.1-27.1 13.9-73.6 44.5-54.5 68 5.6 6.9 16 10 21.5 10 17.9 0 35.7-18 61.1-61.8 25.8-8.5 54.1-19.1 79-23.2 21.7 11.8 47.1 19.5 64 19.5 29.2 0 31.2-32 19.7-43.4-13.9-13.6-54.3-9.7-73.6-7.2zM377 105L279 7c-4.5-4.5-10.6-7-17-7h-6v128h128v-6.1c0-6.3-2.5-12.4-7-16.9zm-74.1 255.3c4.1-2.7-2.5-11.9-42.8-9 37.1 15.8 42.8 9 42.8 9z"/></svg></button></center>
            </div>
    </main>
  </div>
</div>

<br>
<br><br>
<br>

<div class="cont"></div>

<div class="mensagens">
  <div class="cabecalho">

  </div>
</div>

<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script>
</script>
  </body>
</html>
