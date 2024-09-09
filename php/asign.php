<?php
include_once('conect_db.php');
$nome = $_POST['nome'];
$tel = $_POST['tel'];
$tel_enc = $_POST['tel_enc'];
$enc = $_POST['enc'];
$morada = $_POST['morada']; 
$mg = $_POST['msg'];
$hab = $_POST['hab'];
$senha = $_POST['senha'];
$pacote = $_POST['pac'];
$pag = $_POST['pag'];
$code = ceil(rand()/9999);


$ins= "INSERT INTO cadastrado(nome, encarregado, telefone_enc, telefone,nome_enc, morada, habilitacao, pacote, senha, quando, obs, pagamento, code) 
VALUES ('$nome','$enc','$tel_enc', '$tel', '$enc', '$morada','$hab', '$pacote', '$senha', now(), 'assinou um pacote, não fez uma inscrição particular', '$pag', '$code')";
$set= $conexao->query($ins);

if ($set) {
    echo "obrigado";
}

?>