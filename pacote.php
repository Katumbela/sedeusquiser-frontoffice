

<?php
$pac="Indefinido";
$rec = "indefinido";
$entidade = "";
$preco = 0;

if (isset($_GET)) {
    $pacot= $_GET['p'];
    
    switch ($pacot) {
        case 'adm':
            $pac = "SDQ Administrativo";
            $rec = "<li>Direito a 3 cursos Administrativos</li>
            <li>Mais de 1 formando</li>
            <li>Acesso à todos os nossos centros</li>
            <li>Certificado no final do curso</li>";

            $preco = "10.000 AOA";
            break;
        
        case 'tec':
            $pac = "SDQ Técnico";
            $rec = "
            <li>Direito a 3 cursos Técnicos</li>
            <li>Até 2 formandos</li>
            <li>Centro escolhido</li>
            <li>Certificado no final do curso</li>";

            $preco = "18.000 AOA";
            break;
        
        case 'onl':
            $pac = "SDQ Online";
            $rec = "
            <li>Até 15 cursos</li>
            <li>Frequentar em qualquer centro</li>
            <li>Certificado do centro para todos os cursos</li>
            <li>Certificado no final do curso</li>
            <li>Até 5 cursos técnicos</li>
            <li>até 5 formandos</li>";
            $entidade = "<span class='text-muted'><b>GoKourses</b><br><img src='img/logo-2p.png' height='35em'><img src='img/logo_p.png' height='35em'></span>";
            $preco = "<span class='f-edoz'>10.000 AOA</span>";
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
    <title>Assinar Pacote <?=$pac?> | Se Deus Quiser</title>
    <link rel="shortcut icon" href="img/logo_p.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="carousel.css">
    <link rel="stylesheet" href="aos/aos.css">
    <link rel="stylesheet" href="owl/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="owl/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" href="estilo.beneficios.css">
    <link rel="stylesheet" href="produto.css">
    <link rel="stylesheet" href="cursos.css">
    <link rel="stylesheet" href="alerts/sweetalert2.css">
    <script src="alerts/sweetalert2.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="owl/dist/owl.carousel.js"></script>
    <script src="aos/aos.js"></script>
    <script src="js/bootstrap.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    @font-face {
        font-family: euro;
        src: url(fontes/eurof75.ttf);
    }

    @font-face {
        font-family: euro2;
        src: url(fontes/eurof55.ttf);
    }

    @font-face {
        font-family: gokside;
        src: url(fontes/78936___.TTF);
    }

    
  ::-webkit-scrollbar{
        width: 15px!important;
        cursor: pointer!important;
    }

    ::-webkit-scrollbar-track{
        box-shadow: inset 0 0 5px grey!important;
        border-radius: 10px!important;
        cursor: pointer!important;
    }

    ::-webkit-scrollbar-thumb{
        background: #de0877!important;
        border-radius: 10px!important;
        cursor: pointer!important;
    }

    ::-webkit-scrollbar-thumb:hover{
        background: #f787c1!important;
        cursor: pointer!important;
    }
    
    @font-face {
        font-family: caprica;
        src: url(fontes/CapricaScriptPersonalUse.ttf)
    }
    
    @font-face {
        font-family: edoz;
        src: url(fontes/edosz.ttf)
    }

    .f-edoz{
    font-family: edoz;
  }

    h2{
        font-family: 'euro';
        font-weight: bolder;
    }

    h4{
        font-family: euro2;
    }
  .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:focus-within{
        background: #de0877!important;
        color: #fff!important;
    }

    body{
    font-family: gokside;
    }

    @media screen and (max-width: 800px) {
        .img{
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 18vh;
            z-index: 10000;
        }

        .img img{
            height: 2.5em;
        }
        .corpo{
            margin-top: 19vh;
        }
    }

</style>
<body>
    <div class="bg-s img shadow" >
        <!-- Generated by IcoMoon.io -->
    
    <a href="/">
         <svg class="m-3" version="1.1" fill="#de0877" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24">
        <title>Voltar</title>
        <path d="M23.312 11.25h-19.558l4.5-4.5-1.061-1.061-6.31 6.31 6.31 6.31 1.061-1.061-4.5-4.5h19.558v-1.5z"></path>
        </svg>
         </a>   
     <center><img src="img/logo_s.png" height="80em" style="margin-top: 2vh;" alt=""></center>
  
    </div>
<main class="corpo">
    <div class="container">
        <br><br>
    <center><h2 class="text-s"><?=$pac?></h2><?=$entidade?></center>

                <div class="row">
    <br>
                    <div class="col-lg-6 col-12 col-md-6 col-sm-12 col-xs-6 container my-3">
                                            
                        <h4>Dados do Pacote:</h4>
                                <div class="dados">
                                    <ul class="numbered-list">
                                        <?=$rec?>
                                    </ul>
                                    <center><span class="text-s"><b class="f-25 sublinhado"><?=$preco?></b></span></center>
                                </div>
                    </div>
                    
    </div>
    

    <div class="form">
            <div class="form-group">
                    <div class="col-lg-6 col-12 col-md-6 col-sm-12 col-xs-6 container my-3">
                        <span class="text-muted">Preencha o formulário para aduquir este pacote</span>
                        <div class="fomulario shadow p-4 my-2" style="border-radius: 15px;">
                            
                            <div class="row">
                                
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 my-3">
                                <label for="nome">Nome Completo <b class="text-danger">*</b></label>
                                <input type="text" name="nome" class="form-control" id="nome" >
                            </div>
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 my-3">
                                <label for="email">Encarregado / Familiar <b class="text-danger">*</b></label>
                                <input type="email" name="" class="form-control" id="enc">
                            </div>
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 my-3">
                                <label for="email">Telefone <b class="text-danger">*</b></label>
                                <input type="email" name="" class="form-control" id="tel">
                            </div>
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 my-3">
                                <label for="email">Tel. Alternativo<b class="text-danger">*</b></label>
                                <input type="tel" name="" class="form-control" id="tel_enc">
                            </div>                            
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-3">
                                <label for="senha">Morada <b class="text-danger">*</b></label>
                                <input type="text" name="" class="form-control" id="morada">
                            </div>                          
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-3">
                                <label for="senha">Crie uma senha <b class="text-danger">*</b></label>
                                <input type="password" name="" class="form-control" id="senha">
                            </div>
                            <input type="hidden" id="pac" name="pacote" value="<?=$pac?>">
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-3">
                                <label for="hab">Habilitações <b class="text-danger">*</b></label>
                                <select name="hb" id="hab" class="form-control">
                                    <option value="1º ciclo">1º Ciclo</option>
                                    <option value="2º ciclo">2º Ciclo</option>
                                    <option value="ensino superior">Ensino Superior</option>
                                    <option value="ensino primario">Ensino Primário</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-3">
                                <label for="pag">Forma de Pagamento <b class="text-danger">*</b></label>
                                <select name="pag" id="pag" class="form-control">
                                    <option value="Cash">Cash ( <span class="text-muted">Presencial</span> )</option>
                                    <option value="paypay">Pay Pay África</option>
                                    <option value="ref">Pag. por Referência</option>
                                    <option value="Transferência">Transferência</option>
                                    <option value="Depósito">Depósito</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-3 text-center"><button class="btn btn-outline-primary w-100" style="border-radius: 2px!important;" id="assinar">Adquirir agora</button></div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
<br>
<br>
<hr>
    <footer class="foo">
        <center><span class="text-muted">&copy; 2022 &middot; Se Deus Quiser</span> <br> <span class="text-muted">Powered By <a href="http://gokourses.web.app/">GoKourses</a></span> <br></center>
    </footer>
    
</main>


<script>

$('#assinar').click(function (s) {
    s.preventDefault;
    var nome, enc, pac, tel, tel_enc, morada, senha, hab, pag;
    nome= $('#nome').val();
    enc= $('#enc').val();
    tel= $('#tel').val();
    tel_enc= $('#tel_enc').val();
    morada= $('#morada').val();
    senha= $('#senha').val();
    hab= $('#hab').val();
    pag= $('#pag').val();
    pac = $('#pac').val();


    if (nome = "" || tel == "" || enc=="" || tel_enc=="" || senha=="" || pag=="" || morada=="") {
        Swal.fire(
        'Ops!',
        'Por favor, preencha os campos vazios!',
        'error');
    }

    else{

        var dados = {
            nome:$('#nome').val(),
            enc:$('#enc').val(),
            tel:$('#tel').val(),
            tel_enc:$('#tel_enc').val(),
            morada:$('#morada').val(),
            senha:$('#senha').val(),
            hab:$('#hab').val(),
            pag:$('#pag').val(),
            pac :$('#pac').val()

        }

        $.post('php/asign.php', dados, function (ret, suc) {
            if(suc=="success"){
                Swal.fire(
        'Obrigado pela preferencia!',
        'Seu pacote foi reservado com sucesso, vá para a pagina inicial e faça login',
        'success'
      
        );

           $('#nome').val("");
           $('#enc').val("");
           $('#tel').val("");
           $('#tel_enc').val("");
           $('#morada').val("");
           $('#senha').val("");
           $('#hab').val("");
           $('#pag').val("");
           $('#pac').val("");



            }
        })

    
    }

})

</script>
</body>
</html>