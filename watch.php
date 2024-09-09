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

if(empty($_GET['i'])){
    echo "";
}
else {
    $id = $_GET['i'];
    
    $set = "SELECT * FROM aulas WHERE id='$id'";
    $con= $conexao->query($set);
    $existe = mysqli_num_rows($con);
    $dad= mysqli_fetch_array($con);
    $curso = $dad['curso'];
    $desc = $dad['descricao'];
    $link = $dad['link'];
    $aula = $dad['aula'];



}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de <?=$curso?> | SDQ</title>
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

    .a:hover, .a:focus, .a:focus-within{
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
            <a href="dashboard.php">
                    <svg class="m-3" version="1.1" fill="#de0877" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <title>Voltar</title>
                <path d="M23.312 11.25h-19.558l4.5-4.5-1.061-1.061-6.31 6.31 6.31 6.31 1.061-1.061-4.5-4.5h19.558v-1.5z"></path>
                </svg> Voltar
             </a>   
                <div class="alert alert-success">
                <span><h6>Seja Bem vindo <?=$nome?></h6></span>
                <span class="text-muted"> Seu código de cadastro: <?=$cdd?></span><br> 
                <span class="text-muted"> Pagamento: <span class="text-danger"> Pendente</span></span><br> 
                <span><a href="php/sair.php">Terminar Sessão</a></span>
            </div>
                    
            <div class="conteu text-center">
                <br>
                <center> <h5 class="text-s"> Aula nº <?=$aula?> do curso de  <?=$curso?></h5></center>
                <hr>
                <br>
              
                    <center>
                        <div class="container"> 

                        <div class="bg-light">
                           <video style="height: 50vh!important; max-width: 80vw!important; max-width: 80vw!important" src="lil.mp4" controls autoplay="true"></video>
                        </div>
                        </div><br>
                        <input class="form-control" type="text" name="" id="msg" placeholder="insira sua dúvida">
                        <br>
                        <input id="env" class="form-control btn-primary" type="button" value="Enviar">
                    </center>

                    <div class="res">

                    </div>
          
                </div>
            </div>
</main>
    
<center style="position: relative!important; bottom: 0!important; "><span class="text-muted" > &copy; Se Deus Quiser &middot; 2022</span></center>
   <br>


   <script>
       $('#env').click(function () {
           var msg = $('#msg').val();
         
           $('.res').append("<h5 class='text-s'>"+msg+"</h5>");
       })
   </script>
</body>
</html>