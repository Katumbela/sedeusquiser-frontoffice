<?php

$curso = "indefinido";
$dados = "Vazio";
$programa = "sem programa a apresentar";
$preco= 0;
$duracao= "vazio";

if (isset($_GET)) {
    $c = $_GET['c'];

    switch ($c) {
        case 'contabilidade_g':
            $curso = "Contabilidade Geral. Nível I & II";
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao = "3 Meses";
            $preco = "8.000 AOA";
            break;
        
        case 'contabilidade_i':
            
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao = "3 Meses";
            $curso = "Contabilidade Informatizada";
            $preco = "15.000 AOA";
            break;
        
        case 'excel_a':
            
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Vagas limitadas</li>";
            $duracao = "3 Meses";
            $curso = "Excel Avançado";
            $preco = "8.000 AOA";
            break;
        
        case 'rh':
            $curso = "Gestão de Recursos Humanos    ";
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao = "3 Meses";
            $preco = "5.000 AOA";
            break;
        
        case 'ped':
            $curso = "Pedagogia & Didática";
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao = "3 Meses";
            $preco = "5.000 AOA";
            break;
        
        case 'execel_a':
            $dados ="";
            
            break;
        
        case 'ed_i':
            $curso = "Educadora De Infância";
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao="3 Meses";
            $preco = "8.000 AOA";
            break;
        
        case 'g_e':
            $curso = "Gestão De Empresas";
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao ="3 Meses";
            $preco = "5.000 AOA";
            break;
        
        case 'inf_o':
            $curso = "Informática na Óptica do Utilizador ";
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao="3 Meses";
            $preco = "5.000 AOA";
            break;
        
        case 'inf_i':
            $curso = "Informática Com Internet";
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao="3 Meses";
            $preco = "8.000 AOA";
            break;
        
        case 'cctv':
            $curso = "CCTV - Montagem De Câmeras De Vigilância";
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>"; 
            $duracao="1 Mês";
            $preco = "15.000 AOA";
            break;
        
        case 'frio':
            $curso = "Frio & Climatização";
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao="3 Meses";
            $preco = "8.000 AOA";
            break;
        
        case 'redes':
            $curso = "Redes De Computadores";
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao="45 dias";
            $preco = "10.000 AOA";
            break;
        
        case 'hard_inf':
            $curso = "Hardware & Software - Reparação De Computadores & Instalação De Programas";
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao="45 dias";
            $preco = "8.000 AOA";
            break;
        
        case 'decoracao':
            $curso = "Decoração & Artes";
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao="3 Meses";
            $preco = "8.000 AOA";
            break;
        
        case 'culinaria':
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao="3 Meses";
            $curso ="Culinária";
            $preco = "5.000 AOA";
            break;
        
        case 'past':
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao="3 Meses";
            $curso= "Pastelaria";
            $preco = "7.000 AOA";
            break;
        
        case 'cab_pro':
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao="3 Meses";
            $curso = "Cabelereiro Profissional";
            $preco = "8.000 AOA";
            break;
        
        case 'caligrafia':
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao="1 Mês";
            $curso = "Caligrafia  ";
            $preco = "7.000 AOA";
            break;
        
        case 'ingles_a_b':
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao="3 Meses";
            $curso = "Inglês Americano & Británico";
            $preco = "2.500 AOA";
            break;
        
        case 'est_pro':
            $dados ="<li class='text-success'>Curso Disponível </li><li class='text-s'>Inscrições abertas</li>
            <li>Certificado </li>
            <li>Trabalho de fim de curso</li>";
            $duracao="2 Semanas";
            $curso = "Estética Profissional(Facial, Corporal e Depilação)";
            $preco = "5.000 AOA (1ª prestação)";
            break;
        
        
        default:
            # code..
            $curso = "Curso indefinido, vá para a pagina inicial para escolher o seu curso";
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
    <title>Curso de <?=$curso?> | Se Deus Quiser</title>
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
    .f-t{
        font-family: 'euro';
        font-weight: bolder;
    }

    h2{
        font-family: 'euro';
        font-weight: bolder;
    }

    
.swal2-styled.swal2-confirm {
  border: 0;
  border-radius: 0.25em;
  background: initial;
  background-color: #de0877;
  color: #fff;
  font-size: 1em;
}
.swal2-styled.swal2-confirm:focus {
  box-shadow: 0 0 0 3px #de0877;
}

    h4{
        font-family: euro2;
    }

    body{
    font-family: gokside;
    }

    @media screen and (max-width: 730px) {
        .img{
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 10000;
        }

        .corpo{
            margin-top: 8vh;
        }
    }

    .text-s, .text-success{
        font-weight: bolder;
    }

    ::-webkit-scrollbar{
        width: 15px!important;
        cursor: pointer!important;
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
        background: #f787c1!important;
    }

    #cadastrar:hover, #cadastrar:focus, #cadastrar:focus-within{
        background: #de0877;
        color: #fff!important;
    }


    @media screen and (min-width: 735px)  {
        .img{
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 10000;
        }

        .corpo{
            margin-top: 8vh;
        }
    }
    
</style>
<body>
    <div class="img shadow bg-white" >
        <!-- Generated by IcoMoon.io -->
    
    <a href="/" style="color: #de0877!important">
         <svg class="m-3" fill="#de0877" version="1.1" fill="white" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24">
        <title>Voltar</title>
        <path d="M23.312 11.25h-19.558l4.5-4.5-1.061-1.061-6.31 6.31 6.31 6.31 1.061-1.061-4.5-4.5h19.558v-1.5z"></path>
        </svg>
     </a>  
</div>
<script async="async" data-cfasync="false" src="//pl20518975.highcpmrevenuegate.com/70d0edb4bd3cc093d6bc011f1d7c4120/invoke.js"></script>
<div id="container-70d0edb4bd3cc093d6bc011f1d7c4120"></div>
<main class="corpo">
    <div class="container">
        <br><br>
    <center><h2 class="text-s"><?=$curso?></h2></center>

                <div class="row">
    <br>
                    <div class="col-lg-6 col-12 col-md-6 col-sm-12 col-xs-6 container my-3">
                                            
                        <h4>Dados do Curso:</h4>
                                <div class="dados">
                                    <ul class="numbered-list">
                                        <?=$dados?>
                                    </ul>
                                    <center><span class="text-s"><b class="f-25 f-t sublinhado"><?=$preco?></b></span></center>
                                </div>
                    </div>
                    
    </div>
    

    <div class="form">
            <div class="form-group">
                    <div class="col-lg-6 col-12 col-md-6 col-sm-12 col-xs-6 container my-3">
                        <span class="text-muted">Preencha o formulário para fazer a sua inscrição</span>
                        <div class="fomulario shadow p-4 my-2" style="border-radius: 15px;">
                            
                            <div class="row">
                                
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12  my-3">
                                <label for="nome">Nome Completo</label>
                                <input type="text" name="nome" class="form-control" id="nome" >
                            </div>
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12  my-3">
                                <label for="email">Encarregado/ Familiar</label>
                                <input type="text" name="" class="form-control" id="n_enc">
                            </div>
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12  my-3">
                                <label for="email">Telefone</label>
                                <input type="tel" name="" class="form-control" id="tel">
                            </div>
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 my-3">
                                <label for="email">Tel. Enc.</label>
                                <input type="tel" name="" class="form-control" id="tel_enc">
                                <input type="hidden" name="" id="curso" value="<?=$curso?>">
                                <input type="hidden" name="" id="dur" value="<?=$duracao?>">
                                <input type="hidden" name="" id="data" value="<?php echo "Matriculou-se no dia ".date('d')." de ".date('m')." de ".date('Y');?>">
                            </div>
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 my-3">
                                <label for="email">Morada</label>
                                <input type="text" name="" placeholder="Luanda, Talatona - fubú" class="form-control" id="morada">
                            </div>
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-3">
                                <label for="email">Habilitações literárias</label>
                                <select name="pag" id="hab" class="form-control">
                                    <option value=""></option>
                                    <option value="Ensino Primário">Ensino Primário</option>
                                    <option value="Iº Ciclo">Iº Ciclo</option>
                                    <option value="IIº Ciclo">IIº Ciclo</option>
                                    <option value="Ensino Superior">Ensino Superior</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-3">
                                <label for="email">Como soube de nós</label>
                                <select name="pag" id="como" class="form-control">
                                    <option value="Um amigo">Um amigo</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Panfleto">Panfleto</option>
                                    <option value="Em algum lugar">Em algum lugar</option>
                                    <option value="Gokourses">Gokourses</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-3">
                                <label for="email">Período</label>
                                <select name="pag" id="per" class="form-control">
                                    <option value="manha">Manhã</option>
                                    <option value="Tarde">Tarde</option>
                                    <option value="Noite">Noite</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-3">
                                <label for="email">Centro </label>
                                <select name="pag" id="cent" class="form-control">
                                    <option value=""></option>
                                    <option value="SDQ - Gamek junto a Macon">SDQ - Gamek junto a Macon</option>
                                    <option value="SDQ - Gamek à direit">SDQ - Gamek à direita</option>
                                    <option value="SDQ - Edificion da Farmácia">SDQ - Edificion da Farmácia</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-3">
                                <label for="email">Forma de Pagamento</label>
                                <select name="pag" id="pag" class="form-control">
                                    <option value=""></option>
                                    <option value="Transferência">PayPay África</option>
                                    <option value="Transferência">Pag. Referencia</option>
                                    <option value="Transferência">Transferência</option>
                                    <option value="Depósito">Depósito</option>
                                    <option value="Cash">Cash</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-3 text-center"><button class="btn ir btn-outline-primary w-100 " id="cadastrar" style="border-radius: 2px!important;">Baixar Ficha</button></div>
                            </div>
                        
                    </div>
                </div>
            </div>
    </div>
<br>
<br>
<hr>
 <br>
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
    <hr>
<br>

    <footer class="foo pb-2">
        <center><span class="text-muted">&copy; 2022 &middot; Se Deus Quiser</span> <br> <span class="text-muted">Powered By <a href="http://gokourses.web.app/">GoKourses</a></span> <br></center>
    </footer>
    
</main>


<script>



$('.ir').click(function () {
    
    var nome, enc, pac, tel, tel_enc, periodo, duracao, ficha, datas, curso, centro, como, morada, senha, hab, pag;
    nome= $('#nome').val();
    enc= $('#n_enc').val();
    tel= $('#tel').val();
    tel_enc= $('#tel_enc').val();
    morada= $('#morada').val();
    hab= $('#hab').val();
    pag= $('#pag').val();
    como= $('#como').val();
    ficha = <?= ceil(rand()/9999999)?>;
    datas = $('#data').val();
    periodo = $('#per').val();
    duracao = $('#dur').val();
    curso = $('#curso').val();
    centro = $('#cent').val();


    if (nome = "" || tel == "" || enc=="" || tel_enc=="" || senha=="" || pag=="" || morada==""|| hab==""|| centro=="") {
        Swal.fire(
        'Ops!',
        'Por favor, preencha os campos vazios!',
        'error',
        );
    }

    else{

        var dados = {
            nome:$('#nome').val(),
            enc:$('#n_enc').val(),
            tel:$('#tel').val(),
            tel_enc:$('#tel_enc').val(),
            morada:$('#morada').val(),
            ficha: ficha,
            hab:$('#hab').val(),
            pag:$('#pag').val(),
            curso : curso,
            como : como,
            centro: centro,
            duracao: duracao,
            periodo: periodo,

        }

        $.post('php/insc.php', dados, function (ret, suc) {
            if(suc=="success"){
                Swal.fire(
                'Obrigado pela preferencia!',
                'Sua inscrição foi feita com sucesso, conclua o pagamento e dirija se ao centro escolhido',
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
            $('#tel_enc').val("");

        var cont = "<center><img src='img/logo_s.png' height='50em'><br><br><h5>Ficha Nº "+ ficha +"</h5></center><br><br><div><p>Nome do formando: <span style='text-decoration: underline; width: 100%'> "+ nome +"</span><br>Tel:<span style='text-decoration: underline'> "+ tel +"</span>      Tel. Alternativo(Família): <span style='text-decoration: underline'>"+ tel_enc +"</span>    Nome: <span style='text-decoration: underline'> "+ enc +"</span><br>Morada: <span style='text-decoration: underline'> "+ morada +"</span>     Habilitações literárias: <span style='text-decoration: underline'>  "+ hab +"</span> <br> Matriculou-se no curso de:    <span style='text-decoration: underline'> "+ curso +"</span>        Periodo: <span style='text-decoration: underline'>  "+ periodo +"</span> Duração:<span style='text-decoration: underline'>  "+ duracao +"</span></p><br><br><br><div style='display:flex; flex-direction: row; justify-content: space-evenly;'><div><center> <b>A Secretária</b><br><br> <hr style='width: 210px!important'> </center></div><center> <b>O(a) Formando (a)</b><br><br> <hr style='width: 210px!important'> </center><div></div></div><br><center><b>Este formulário deve acompanhar-se com as respectivas documentações de modo a finalizar a sua matrícula</b><br><p>"+ datas + "</p><br><b>Coordenadas de Pagamento</b><br><p>Banco BIC <br> MMAM COMERCIO E SERVICOS SU LDA <br><br> CONTA: 17488500415001 <br>IBAN: AO06 0051.0000.7488.5004.1517.9</p><br><br><br><p>Powered By <img src='img/logo-2p.png' height='25em'></p></center></div>";
        var opt = {
            margin: 1,
            filename: 'inscricao '+ $('#nome').val(),
            image: {type: 'jpeg', quality: 0.98},
            html2canvas: {scale: 2},
            jsPDF: {unit: 'in', format: 'letter', orientation: 'portrait'}
        }

        html2pdf().set(opt).from(cont).save();


            }
        })

    
    }

})

</script>
<script type='text/javascript' src='//pl20519146.highcpmrevenuegate.com/d6/ab/5e/d6ab5e59a3ff1663c05384b48e4d3e99.js'></script>
</body>
</html>