<?php
session_start();
include("php/conect_db.php");

    $pacot = "Não tem nenhum pacote activo";
if (!empty($_SESSION['tel'] || $_SESSION['nome'] || $_SESSION['pac'] || $_SESSION['code'])) {
    $nome = $_SESSION['nome'];
    $pacot ="Pacote: ".$_SESSION['pac'];
    $cdd = $_SESSION['code'];
    $tel = $_SESSION['tel'];
}
else {
    header('location: login.php?e=expired');
}


?>

<!DOCTYPE html>
<html lang="pt">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FHBP9WB24G"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FHBP9WB24G');
</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu dashboard | SDQ</title>
    <script src="js/jquery.js"></script>
    <link rel="shortcut icon" href="img/logo_p.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="carousel.css">
    <link rel="stylesheet" href="aos/aos.css">
    <link rel="stylesheet" href="alerts/sweetalert2.css">
    <link rel="stylesheet" href="owl/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="owl/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" href="estilo.beneficios.css">
    <link rel="stylesheet" href="produto.css">
    <script src="pdf/html2pdf.bundle.min.js"></script>
    <link rel="stylesheet" href="cursos.css">
    <script src="alerts/sweetalert2.js"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="dash.css">
    <script src="owl/dist/owl.carousel.js"></script>
    <script src="aos/aos.js"></script>
    <script src="js/bootstrap.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<style>


.ma{
       border: 2px solid #ff8fc9!important;
       border-radius: 10px!important;
       padding: 1rem;
   }
   main{
       background: #fff;
       height: 150vh!important;
       border-radius: 15px;
   }
   .a{
       transition: .3s;
       cursor: pointer;
   }

   svg{
       padding: .3rem;
   }

    .a:hover, .a:focus, .a:focus-within, svg{
       background: #ff8fc9;
       align-self: center;
       color: white!important;
       border-radius: 10px;
       transition: .3s;
   }

   .col-4{
       text-align: center;
   }

</style>
<body class="container">
    <main class="container  my-3 px-lg-5 px-md-4 py-3 shadow">
                <div class="logos text-center my-4"><img src="img/logo_s.png" height="60em" alt=""><img src="img/logo-2p.png" height="60em" alt=""></div>
            <div class="alert alert-success">
                <span><h2>Seja Bem vindo <?=$nome?></h2></span><br>
                <p><?=$pacot?><br>Telefone: +244<?=$tel?></p>
                <span class="text-muted"> Seu código de cadastro: <?=$cdd?></span><br>
                <span class="text-muted"> Pagamento: <span class="text-danger"> Pendente</span></span><br> 
                <span><a href="php/sair.php">Terminar Sessão</a></span>
            </div>
                    
                    <br>
                    <br>
        <center>
            
            <div class="ma">
                <div class="row text-center">
                    <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <a href="cert.php"><div class="a">
                            <h1><svg height="1em" fill="#de0877" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M319.4 320.6L224 416l-95.4-95.4C57.1 323.7 0 382.2 0 454.4v9.6c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-9.6c0-72.2-57.1-130.7-128.6-133.8zM13.6 79.8l6.4 1.5v58.4c-7 4.2-12 11.5-12 20.3 0 8.4 4.6 15.4 11.1 19.7L3.5 242c-1.7 6.9 2.1 14 7.6 14h41.8c5.5 0 9.3-7.1 7.6-14l-15.6-62.3C51.4 175.4 56 168.4 56 160c0-8.8-5-16.1-12-20.3V87.1l66 15.9c-8.6 17.2-14 36.4-14 57 0 70.7 57.3 128 128 128s128-57.3 128-128c0-20.6-5.3-39.8-14-57l96.3-23.2c18.2-4.4 18.2-27.1 0-31.5l-190.4-46c-13-3.1-26.7-3.1-39.7 0L13.6 48.2c-18.1 4.4-18.1 27.2 0 31.6z"/></svg></h1>
                            <span class="text-muted">Certificados</span>
                        </div></a> 
                    </div>
                </div>
            </div>
         </center>

<br><br>
            <div class="conteu text-center">
                        <?php
                        
                        
                        $set = "SELECT * FROM aulas";
                        $con= $conexao->query($set);
                        $existe = mysqli_num_rows($con);
                        if ($existe >= 1) {
                        ?>
                <table class="table table-hovered table-striped">
                    <thead>
                        <tr>
                            <th>Aula Nº</th>
                            <th>Tema</th>
                            <th>Curso</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        while($dad= mysqli_fetch_array($con)){


                            ?>
                            <tr>
                                <td><?=$dad['aula']?></td>
                                <td><?=$dad['descricao']?></td>
                                <td><?=$dad['curso']?></td>
                                <td><a href="watch.php?i=<?=$dad['id']?>">Assistir Aula</a></td>
                            </tr>

                            <?php
                            }
                        }
                        
                    else {
                        

                        ?>
                <br><br>
                <center> <h5 class="text-s"> Vazio por entuanto</h5></center>
                <br>

                        <?php
                    }
                        
                        ?>
                    </tbody>
                </table>
   
          
                </div>
            </div>
 </main>
    
<center><span class="text-muted"> &copy; Se Deus Quiser &middot; 2022</span></center>
   <br>
</body>
</html>