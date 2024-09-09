
<?php

$response="";
if (isset($_GET['e'])) {
   $re = $_GET['e'];

   switch ($re) {
    case 'er':
      $response="Telefone ou senha errada";
      break; 

    case 'err':
      $response="Não existe nenhuma conta com estes dados";
      break;
     
    case 'expired':
        $response="Sessão expirada, faça login novamente";
        break;
       
     default:
       # code...
       break;
   }
}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FHBP9WB24G"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FHBP9WB24G');
</script>


	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1921695646246423" crossorigin="anonymous">
	</script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Estudante</title>
    <link rel="shortcut icon" href="img/logo_p.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="estilo.beneficios.css">
    <link rel="stylesheet" href="produto.css">
    <link rel="stylesheet" href="cursos.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .shadow{
        box-shadow: 0px 0px 5px 1px #ff4ca8!important;
        border-radius: 20px;
    }

    body{
        overflow-y: scroll;
    }
    
    .form-control:focus,  .btn-outline-primary:focus{
        box-shadow: 0px 0px 7px 1px #fc53aa!important;
    }

    .foot{
        position: relative;
        bottom: 0;
        left: 0;
        margin-top: 3rem;
        right: 0;
        padding: .5rem 0;
        text-align: center;
    }

    @media screen and (max-width:855px) {
        .center{
            margin-top: .3rem;
        }
        form{
            margin: 0 1rem!important;
        }
    }


    @media screen and (min-width:800px) {
       
        .formu{
            width: 40%;
        }
        .btn-outline-primary{
            border-radius: 2px!important;
        }
    }

    .btn:hover, .btn:focus, .btn:focus-within{
        background: #fff!important;
        color: #de0877!important;

    }


    ::-webkit-scrollbar{
        width: 15px!important;
    }

    ::-webkit-scrollbar-track{
        box-shadow: inset 0 0 5px grey!important;
        border-radius: 10px!important;
    }

    ::-webkit-scrollbar-thumb{
        background: #de0877!important;
        border-radius: 10px!important;
    }

    ::-webkit-scrollbar-thumb:hover{
        background: #b30000!important;
    }


    #load{
        border: 3px solid #de0877;
        height: 1.5rem;
        position: absolute;
        border-right: #facee5;
        border-top: #facee5;
        border-radius: 100px;
        width: 1.5rem;
        display: none;
        animation: girar .5s linear infinite;
    }

    .pro{
        cursor: not-allowed!important;
    }

    @keyframes girar {
        to{
            transform: rotate(360deg);
        }
    }
</style>
<body>
    <div class="container">
<div class="text-start">
    <a href="/">
        <svg class="m-3" version="1.1" fill="#de0877" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24">
       <title>Voltar</title>
       <path d="M23.312 11.25h-19.558l4.5-4.5-1.061-1.061-6.31 6.31 6.31 6.31 1.061-1.061-4.5-4.5h19.558v-1.5z"></path>
       </svg>
   </a>   
</div>
    <center class="center">
<main class="corpo_l">
        <br>
        <br>

    <div class="">
        <div class="shadow p-4 formu">
           <form id="formm" action="php/login.php" method="post">
            <div class="form-group">
                <h2 class="text-s">Faça Login</h2>
                <input type="tel" name="tel" class="form-control" id="tel" placeholder="Nº de Telefone">
                <br>
                <input type="password" id="senha"  name="senha" class="form-control"  placeholder="Insira sua senha">
                <br>
              
                <div id="texto"><span class="text-danger" style="font-size: 12px;"><?=$response?></span></div> <br>
           
             <center><button  class="btn w-100 btn-outline-primary" style="display: inline"><div id="load"></div> Entrar </button></center>
              </form> 
            </div> 
        </div>
    </div>
</main>
</div>
<br><br>
<a href="https://www.sigmatraffic.com?ref=206934">Cheap Website Traffic</a>
    <!-- horizontal -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1921695646246423"
     data-ad-slot="5121234355"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </center>
<footer class="foot bg-light">
    <div class="text-center">
        <span class="text-muted">
            &copy;  2022 &middot; Se Deus Quiser
        </span>
        <br>
        <span class="text-muted">
            Powered By <a href="http://gokourses.web.app">GoKourses</a>
        </span>
    </div>
</footer>

</div>

<script>
    $('.btn').click(function () {
        $('#load').stop().fadeIn();
        $(this).addClass('pro');

        setTimeout(() => {
           $("#form").submit();
        }, 10000);
    });

   
</script>
<script type='text/javascript' src='//pl20519146.highcpmrevenuegate.com/d6/ab/5e/d6ab5e59a3ff1663c05384b48e4d3e99.js'></script>
</body>
</html>