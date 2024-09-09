

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Finanças | ELVIRA</title>
    <link rel="shortcut icon" href="img/logo_p.png" type="image/x-icon">
    <script src="jquery.js"></script>
    <script src="jquery.min.js"></script>
    <link rel="stylesheet" href="quadros.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="estilo_principal.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="js/bootstrap.min.js"> 
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="dash.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="alerts/dist/sweetalert2.css">
    <script src="alerts/dist/sweetalert2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FHBP9WB24G"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FHBP9WB24G');
</script>
</head>
<style>

@font-face {
    font-family: euro;
    src: url(../fontes/eurof55.ttf);
}

@font-face {
    font-family: euro2;
    src: url(../fontes/eurof75.ttf);
}

@font-face {
    font-family: norm;
    src: url(../fontes/Roboto-Light.ttf);
}


.shadoww{
    box-shadow: 0px 0px 8px 2px #50ff50!important;
}

.f-euro2{
    font-family: euro2;
}

.f-euro{
    font-family: euro2;
}

.f-normal{
    font-family: norm ;
}

.user{
    
    position: absolute;
    bottom: 0;
    margin-top: .5rem;

}
body{
    font-family: norm!important;
}
 
    .menu{
        width: 5%!important;
        position: fixed;
        bottom: 0;
        top: 0;
        left: 0;
        background: #d5ebff;
    }
    .menu li i{
    font-size: 1.5rem;
    }

    .tab-list li {
        list-style-type: none;
        display: inline;
        margin: 3%;
    }

    body{
    overflow-x: hidden;    
    }
    
   .conteudo{
   margin-left: 9%; 
   padding-top: 1%; 
    }

    .user{
    
        margin-top: -.5rem;
}

.navbar{
    height: 2.5rem;
    margin-top: 1.5rem
}

.navbar .container  {
    margin-top: -.8rem;
}

    .bg-i{
        background: #052744;
        z-index: 100000000000;
        position: absolute;
        left:0;
        right:0;
        top:0;
    }

.lateral{
    width: 2.5rem!important;
}

.lateral svg{
    margin-left: -.7rem;
}
</style>
<body> 
    <div class="bg-i text-white text-center f-n"><img src="img/free-tag.png" height="20em" alt=""> Seu teste grátis termina em 14 dias</div>
    <div class="bg-k navbar">
        <div class=" container ">
            <b><img src="img/logo_b.png" height="35em" class="m-2 navbar-brand" alt=""></b>
            <div class="user">
                <a class="mx-3 text-white" title="<?=$nome?>"><?=$email?></a>
                <svg width="1.5em" height="1.5em"   viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <title><?=$nome?></title>
                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                  </svg>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-1 col-md-1 col-sm-12 col- xm-2">
       
        </div>
        <div class="lateral bg-k">
            <ul>
                <li class="text-white"> <a class="text-white" href="dashboard/index.php">
                     
                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                <title>Ir para o Dashboard</title>
                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
              </svg> </a>
                </li>
                <li class="text-white">
                <a href="reports.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" fill="white" viewBox="0 0 384 512">

                    <path d="M181.9 256.1c-5-16-4.9-46.9-2-46.9 8.4 0 7.6 36.9 2 46.9zm-1.7 47.2c-7.7 20.2-17.3 43.3-28.4 62.7 18.3-7 39-17.2 62.9-21.9-12.7-9.6-24.9-23.4-34.5-40.8zM86.1 428.1c0 .8 13.2-5.4 34.9-40.2-6.7 6.3-29.1 24.5-34.9 40.2zM248 160h136v328c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V24C0 10.7 10.7 0 24 0h200v136c0 13.2 10.8 24 24 24zm-8 171.8c-20-12.2-33.3-29-42.7-53.8 4.5-18.5 11.6-46.6 6.2-64.2-4.7-29.4-42.4-26.5-47.8-6.8-5 18.3-.4 44.1 8.1 77-11.6 27.6-28.7 64.6-40.8 85.8-.1 0-.1.1-.2.1-27.1 13.9-73.6 44.5-54.5 68 5.6 6.9 16 10 21.5 10 17.9 0 35.7-18 61.1-61.8 25.8-8.5 54.1-19.1 79-23.2 21.7 11.8 47.1 19.5 64 19.5 29.2 0 31.2-32 19.7-43.4-13.9-13.6-54.3-9.7-73.6-7.2zM377 105L279 7c-4.5-4.5-10.6-7-17-7h-6v128h128v-6.1c0-6.3-2.5-12.4-7-16.9zm-74.1 255.3c4.1-2.7-2.5-11.9-42.8-9 37.1 15.8 42.8 9 42.8 9z"/>
                    </svg>
                        </a>
                </li>
                <li class="text-white">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-people" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <title>Seu Pessoal</title>
                        <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                      </svg>
                </li>
                <li class="text-white">
                      <a href="settings.php">
                          <svg version="1.1" id="svg" fill="white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <title>Configurações</title>
                        <path d="M11.491 7.875c-2.278 0-4.125 1.847-4.125 4.125s1.847 4.125 4.125 4.125c2.278 0 4.125-1.847 4.125-4.125v0c-0.003-2.277-1.848-4.122-4.125-4.125h-0zM11.491 14.625c-1.45 0-2.625-1.175-2.625-2.625s1.175-2.625 2.625-2.625c1.45 0 2.625 1.175 2.625 2.625v0c-0.002 1.449-1.176 2.623-2.625 2.625h-0z"></path>
                        <path d="M21.783 15.109l-1.489-1.226c0.126-0.566 0.198-1.216 0.198-1.883s-0.072-1.317-0.209-1.943l0.011 0.060 1.489-1.226c0.21-0.173 0.342-0.432 0.342-0.723 0-0.173-0.047-0.335-0.129-0.474l0.002 0.004-1.529-2.648c-0.164-0.283-0.466-0.469-0.811-0.469-0.119 0-0.232 0.022-0.337 0.062l0.006-0.002-1.808 0.677c-0.908-0.823-1.996-1.467-3.196-1.866l-0.064-0.018-0.317-1.902c-0.075-0.447-0.459-0.783-0.922-0.783-0.001 0-0.002 0-0.003 0h-3.057c-0.001 0-0.002 0-0.003 0-0.463 0-0.847 0.336-0.921 0.778l-0.001 0.005-0.317 1.902c-1.263 0.417-2.351 1.061-3.267 1.891l0.008-0.007-1.808-0.677c-0.098-0.038-0.211-0.060-0.33-0.060-0.345 0-0.646 0.187-0.808 0.465l-0.002 0.004-1.529 2.648c-0.079 0.135-0.126 0.296-0.126 0.469 0 0.291 0.133 0.55 0.341 0.722l0.002 0.001 1.489 1.226c-0.126 0.566-0.198 1.216-0.198 1.883s0.072 1.317 0.209 1.943l-0.011-0.060-1.489 1.226c-0.21 0.173-0.342 0.432-0.342 0.723 0 0.173 0.047 0.335 0.129 0.474l-0.002-0.004 1.529 2.648c0.164 0.283 0.466 0.47 0.811 0.47 0.119 0 0.232-0.022 0.337-0.062l-0.006 0.002 1.808-0.677c0.908 0.823 1.996 1.467 3.196 1.866l0.064 0.018 0.317 1.902c0.075 0.447 0.459 0.783 0.922 0.783 0.001 0 0.002 0 0.003 0h3.057c0.001 0 0.002 0 0.003 0 0.463 0 0.847-0.336 0.921-0.778l0.001-0.005 0.317-1.902c1.263-0.417 2.351-1.061 3.267-1.891l-0.008 0.007 1.808 0.677c0.098 0.038 0.211 0.060 0.33 0.060 0.345 0 0.646-0.187 0.808-0.465l0.002-0.004 1.529-2.648c0.079-0.135 0.126-0.296 0.126-0.469 0-0.291-0.133-0.55-0.341-0.722l-0.002-0.001zM19.409 17.786l-2.255-0.845-0.341 0.344c-0.914 0.921-2.064 1.605-3.352 1.955l-0.053 0.012-0.469 0.124-0.396 2.374h-2.104l-0.396-2.374-0.469-0.124c-1.341-0.362-2.491-1.047-3.404-1.967l-0-0-0.341-0.344-2.255 0.845-1.052-1.822 1.858-1.529-0.127-0.467c-0.166-0.59-0.261-1.267-0.261-1.967s0.095-1.377 0.274-2.020l-0.013 0.053 0.127-0.467-1.858-1.529 1.052-1.822 2.255 0.845 0.341-0.344c0.914-0.921 2.064-1.605 3.352-1.955l0.053-0.012 0.469-0.124 0.396-2.374h2.104l0.396 2.374 0.469 0.124c1.341 0.362 2.491 1.047 3.404 1.967l0 0 0.341 0.344 2.255-0.845 1.052 1.822-1.858 1.529 0.127 0.467c0.166 0.59 0.261 1.267 0.261 1.967s-0.095 1.377-0.274 2.020l0.013-0.053-0.127 0.467 1.858 1.529z"></path>
                        </svg>
                      </a>                
    
                </li>
            </ul>
        </div>
        <div class="col-12 col-lg-11 col-md-11 col-sm-12 col-xm-11">
            <div class="main p-2">
                <br>
                    <center><h3 class="text-k">Gerenciador de Finanças</h3></center>
                    <br>
                        <span class="text-muted " style="box-shadow: 0px 0px 8px 2px #04691e!important;"><h4>saldo contabilístico: <span class="text-k"> 100.000 AOA</span></h4> <span class="bell">
                                                                                                                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bell-fill" fill="#0066be" xmlns="http://www.w3.org/2000/svg">
                                                                                                                                    <title>Notificações</title>
                                                                                                                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                                                                                                                            </svg></span>
                                                                                                                        </span>
                    <hr>


                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#caixa" type="button" role="tab" aria-controls="home" aria-selected="true">Movimentos do Caixa</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Contas a Receber</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Contas a pagar</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Custos Fixos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pessoal-tab" data-bs-toggle="tab" data-bs-target="#pag" type="button" role="tab" aria-controls="contact" aria-selected="false">Pagamentos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pessoal-tab" data-bs-toggle="tab" data-bs-target="#rec" type="button" role="tab" aria-controls="rec" aria-selected="false">Recebimentos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pessoal-tab" data-bs-toggle="tab" data-bs-target="#disp" type="button" role="tab" aria-controls="disp" aria-selected="false">Disponibilidades</button>
                        </li>
                      </ul>

                      <div class="tab-content" id="myTabContent">
        
                          <!--Area do primeiro tab que é o digrtama de Gant-->
                          <div class="tab-pane fade show active" id="caixa" role="tabpanel" aria-labelledby="home-tab">
                            
                            <div class="quadro q1">
                                <div class="div"><h3 class="text-white">Movimentações feitas no caixa</h3> <span class="minus bg-white px-3 shadoww" style="border-radius: 15px; "><b class="text-k">Saldo Anterior: 00 AOA</b> </span></div>
                                  <table class="table table-bordered table-hover table-striped table-sm w-100">
                                      <thead>
                                          <tr>
                                              <th>Data</th>
                                              <th>Histórico</th>
                                              <th>Complemento</th>
                                              <th> entrada </th>
                                              <th>Saida</th>
                                              <th>Saldo</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                              01/01/2023
                                          </td>
                                          <td>
                                              aasd fdfdr rtyrygrtfght greg
                                          </td>
                                          <td>
                                              João Afonso 
                                          </td>
                                          <td>
                                              --
                                          </td>
                                          <td>
                                              2000 AOA
                                          </td>
                                          <td>
                                              21.000 AOA
                                          </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                01/01/2023
                                            </td>
                                            <td>
                                                aasd fdfdr rtyrygrtfght greg
                                            </td>
                                            <td>
                                                João Afonso 
                                            </td>
                                            <td>
                                                2000 AOA
                                            </td>
                                            <td>
                                                --
                                            </td>
                                            <td>
                                                23.000 AOA
                                            </td>
                                          </tr><!--termina a tabela escrito com todos os dados ficticios-->
                                      

                                    </tbody>
                                  </table>
                                  <span class="mx-4 text-muted">Exibindo 5 de 9 resultados</span> <span class="ver"><a href="view_table.html">Ver tudo</a></span>
                                  <br>

                            </div>
                        </div><!--termino da aba do caixa-->


                        <div class="tab-pane fade show " id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="text-start c_r" style="display: none;">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <center><span class="text-muted">Adicionar conta a receber</span></center>
                                        <tr>
                                          <td>
                                              <input type="text" name="" id="para" placeholder="Nome da entidade" class="form-control">
                                          </td>
                                          <td>
                                            <input type="tel" name="" id="val" placeholder="Valor ( AOA )" class="form-control">
                                          </td>
                                          <td>
                                            <input type="tel" name="" id="desc2" placeholder="Descrição" class="form-control">
                                          </td>
                                          <td>
                                            <input type="date" name="" id="data"  class="form-control">
                                          </td>
                                        </tr>
                                    </tbody>
                                </table>
                                        <center><button class="btn btn-outline-danger" style="border-radius: 20px;">Adicionar</button></center>
                                    <br>
                                    </div>

                            <div class="quadro q1">
                                <div class="div"><h3 class="text-white">Contas a receber</h3> <span class="minus"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-minus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <title>Minimizar</title>
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                    <path fill-rule="evenodd" d="M5.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                                  </svg></span></div>
                                  <table class="table table-hover table-striped table-sm w-100">
                                      <thead>
                                          <tr>
                                              <th>Entidade</th>
                                              <th>NIF</th>
                                              <th>Valor</th>
                                              <th>Prazo de pagamento</th>
                                              <th></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                              João Afonso
                                          </td>
                                          <td>
                                              006235348BA044
                                          </td>
                                          <td>
                                              1.00 AOA
                                          </td>
                                          <td>
                                              01/01/2023
                                          </td>
                                          <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <title>Editar</title>
                                                <path d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"/></svg>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                              João Afonso
                                          </td>
                                          <td>
                                              006235348BA044
                                          </td>
                                          <td>
                                              1.00 AOA
                                          </td>
                                          <td>
                                              01/01/2023
                                          </td>
                                          <td>
                                              
                                          </td>
                                        </tr><!--termina a tabela escrito com todos os dados ficticios-->
                                      

                                    </tbody>
                                  </table>
                                  <span class="mx-4 text-muted">Exibindo 5 de 9 resultados</span> <span class="ver"><a href="view_table.html">Ver tudo</a></span>
                                  <br>
                                        <center><button style="border-radius: 50px;" class="btn btn_add btn-outline-primary" id="add1">Adicionar +</button></center>

                            </div>
                        </div>



                        <div class="tab-pane fade show " id="profile" role="tabpanel" aria-labelledby="home-tab">
                            <div class="text-start c_p" style="display: none;">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <center><span class="text-muted">Adicionar conta a pagar</span></center>
                                        <tr>
                                          <td>
                                              <input type="text" name="" id="para" placeholder="Nome da entidade" class="form-control">
                                          </td>
                                          <td>
                                            <input type="tel" name="" id="val" placeholder="Valor ( AOA )" class="form-control">
                                          </td>
                                          <td>
                                            <input type="tel" name="" id="desc2" placeholder="Descrição" class="form-control">
                                          </td>
                                          <td>
                                            <input type="date" name="" id="data"  class="form-control">
                                          </td>
                                        </tr>
                                    </tbody>
                                </table>
                                        <center><button class="btn btn-outline-danger" style="border-radius: 20px;">Adicionar</button></center>
                                    <br>
                                    </div>
                        </center>

                            <div class="quadro q2">
                                <div class="div"><h3 class=" "> Contas a pagar</h3><span class="minus"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-minus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <title>Minimizar</title>
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                    <path fill-rule="evenodd" d="M5.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                                  </svg></span></div>
                                  
                                  <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Para/Entidade</th>
                                            <th>Valor</th>
                                            <th>Descrição</th>
                                            <th>Prazo/Até</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <td>
                                              AROTEC SA
                                          </td>
                                          <td>
                                              20.000 AOA
                                          </td>
                                          <td>
                                              descricao ou o servço feito para tal divida 
                                          </td>
                                          <td>
                                              01/01/2022 
                                          </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                <span class="mx-4 text-muted">Exibindo 5 de 9 resultados</span> <span class="ver"><a href="view_table.html">Ver tudo</a></span>
                                <br>
                                      <center><button style="border-radius: 50px;" class="btn btn_add btn-outline-danger" id="add2">Adicionar +</button></center>
                            </div>

                            <center>
                                <br>
                                </center></div>

                        <div class="tab-pane fade show " id="contact" role="tabpanel" aria-labelledby="home-tab">
                            <div class="quadro q1">
                               <div class="div"><h3 class="text-white">Custos Fixos</h3><span class="minus"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-minus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                   <title>Minimizar</title>
                                   <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                   <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                   <path fill-rule="evenodd" d="M5.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                                 </svg></span></div>

                                 <table class="table table-hover table-striped">
                                     <thead>
                                         <tr>
                                             <th>Descrição</th>
                                             <th>Valor</th>
                                             <th>Frequência</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                           <td>
                                               Agua 
                                           </td>
                                           <td>
                                               20.000 AOA
                                           </td>
                                           <td>
                                               Mensalmente
                                           </td>
                                         </tr>
                                     </tbody>
                                 </table>
                                 <span class="mx-4 text-muted">Exibindo 5 de 9 resultados</span> <span class="ver"><a href="view_table.html">Ver tudo</a></span>
                                 <br>
                                       <center><button style="border-radius: 50px;" class="btn btn_add btn-outline-primary">Adicionar +</button></center>
                           </div>
                       </div><!--termino -->


                       <div class="tab-pane fade show " id="pag" role="tabpanel" aria-labelledby="home-tab">
                        <div class="quadro q2">
                            <div class="div"><h3 class="  "> Pagamentos</h3><span class="minus"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-minus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <title>Minimizar</title>
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                <path fill-rule="evenodd" d="M5.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                            </svg></span>
                        </div>
                    </div>
                 </div><!--termino -->


                       <div class="tab-pane fade show " id="rec" role="tabpanel" aria-labelledby="home-tab">
                              
                                <div class="quadro q1">
                                    <div class="div"><h3 class=" text-white "> Recebimentos</h3><span class="minus"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-minus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <title>Minimizar</title>
                                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                        <path fill-rule="evenodd" d="M5.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                                    </svg></span></div>
                                </div>
                                
                       </div><!--termino -->

                        
                        <div class="tab-pane fade show " id="disp" role="tabpanel" aria-labelledby="home-tab">
                            <div class="quadro q1">
                                    <div class="div"><h3 class=" text-white "> Disponibilidades</h3><span class="minus"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-minus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <title>Minimizar</title>
                                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                        <path fill-rule="evenodd" d="M5.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                                    </svg></span></div>

                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Tipo</th>
                                            <th>Conta</th>
                                            <th>Valor</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>
                                            Banco BAI
                                        </td>
                                        <td>
                                            17518332410001
                                        </td>
                                        <td>
                                            20.000 AOA
                                        </td>
                                        <td>
                                            <a href="#">Editar</a>
                                        </td>
                                        </tr>

                                        <tr>
                                        <td>
                                            CAIXA
                                        </td>
                                        <td>
                                            ------------------
                                        </td>
                                        <td>
                                            6.000 AOA
                                        </td>
                                        <td>
                                            <a href="#">Editar</a>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <span class="mx-4 text-muted">Exibindo 5 de 9 resultados</span> <span class="ver"><a href="view_table.html">Ver tudo</a></span>
                                <br>
                                    <center><button style="border-radius: 50px;" class="btn btn_add btn-outline-primary">Adicionar +</button></center>
                            </div>
                            </div>
                                
                            </div>

                       </div>


                     


        <script>


            $('#add2').click(function () {
                $('.c_p').stop().slideToggle();
                $(this).fadeOut()
            })

            $('#add1').click(function () {
                $('.c_r').stop().slideToggle();
                $(this).fadeOut()
            })

        </script>

    </div>
</body>
</html>