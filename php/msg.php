<?php
include_once('conect_db.php');
$mg = $_POST['msg'];
$email = $_POST['email'];
$tel = $_POST['email'];


$ins= "INSERT INTO mensagem(email, telefone, mensagem, quando) VALUES ('$email','$tel','$mg', now())";
$set= $conexao->query($ins);

if ($set) {
    echo "obrigado";
}

?>