<?php
include_once('conect_db.php');


$tel =$_POST['tel'];
$sen =$_POST['senha'];


$set = "SELECT * FROM cadastrado WHERE telefone='$tel' AND senha='$sen'";
$con= $conexao->query($set);
$existe = mysqli_num_rows($con);
$dad= mysqli_fetch_array($con);

$set2 = "SELECT * FROM cadastrado WHERE telefone='$tel' OR senha='$sen'";
$con2= $conexao->query($set2);
$dad2= mysqli_fetch_array($con2);

if ($existe>1) {
    header('location: ../login?e=er');
}

 else if ($existe2 = mysqli_num_rows($con2) < 1) {
    header('location: ../login?e=err');
}


else {
   #
   echo mysqli_error($conexao);
   var_dump($_POST);
   echo  $dad['nome'];
    session_start();
    $_SESSION['nome'] = $dad['nome'];
    $_SESSION['pac'] = $dad['pacote'];
    $_SESSION['code'] = $dad['code'];
    $_SESSION['tel'] = $dad['telefone'];
    $_SESSION['pag'] = $dad['pagamento'];
    
    header('location: ../dashboard_student');
}
?><?php
include_once('conect_db.php');


$tel =$_POST['tel'];
$sen =$_POST['senha'];


$set = "SELECT * FROM cadastrado WHERE telefone='$tel' AND senha='$sen'";
$con= $conexao->query($set);
$existe = mysqli_num_rows($con);
$dad= mysqli_fetch_array($con);

$set2 = "SELECT * FROM cadastrado WHERE telefone='$tel' OR senha='$sen'";
$con2= $conexao->query($set2);
$dad2= mysqli_fetch_array($con2);

if ($existe>1) {
    header('location: ../login?e=er');
}

 else if ($existe2 = mysqli_num_rows($con2) < 1) {
    header('location: ../login?e=err');
}


else {
   #
   echo mysqli_error($conexao);
   var_dump($_POST);
   echo  $dad['nome'];
    session_start();
    $_SESSION['nome'] = $dad['nome'];
    $_SESSION['pac'] = $dad['pacote'];
    $_SESSION['code'] = $dad['code'];
    $_SESSION['tel'] = $dad['telefone'];
    $_SESSION['pag'] = $dad['pagamento'];
    
    header('location: ../dashboard_student');
}
?><?php
include_once('conect_db.php');


$tel =$_POST['tel'];
$sen =$_POST['senha'];


$set = "SELECT * FROM cadastrado WHERE telefone='$tel' AND senha='$sen'";
$con= $conexao->query($set);
$existe = mysqli_num_rows($con);
$dad= mysqli_fetch_array($con);

$set2 = "SELECT * FROM cadastrado WHERE telefone='$tel' OR senha='$sen'";
$con2= $conexao->query($set2);
$dad2= mysqli_fetch_array($con2);

if ($existe>1) {
    header('location: ../login?e=er');
}

 else if ($existe2 = mysqli_num_rows($con2) < 1) {
    header('location: ../login?e=err');
}


else {
   #
   echo mysqli_error($conexao);
   var_dump($_POST);
   echo  $dad['nome'];
    session_start();
    $_SESSION['nome'] = $dad['nome'];
    $_SESSION['pac'] = $dad['pacote'];
    $_SESSION['code'] = $dad['code'];
    $_SESSION['tel'] = $dad['telefone'];
    $_SESSION['pag'] = $dad['pagamento'];
    
    header('location: ../dashboard_student');
}
?>