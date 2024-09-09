<?php
include_once('conect_db.php');
$nome = $_POST['nome'];
$tel = $_POST['tel'];
$tel_enc = $_POST['tel_enc'];
$enc = $_POST['enc'];
$morada = $_POST['morada']; 
$hab = $_POST['hab'];
$curso = $_POST['curso'];
$centro = $_POST['centro'];
$como = $_POST['como'];
$pag = $_POST['pag'];
$ficha = $_POST['ficha'];
$duracao = $_POST['duracao'];
$periodo = $_POST['periodo'];
$code = ceil(rand()/9999);


$ins= "INSERT INTO `inscricao` (`nome`, `telefone`, `tel_encarregado`, `encarregado`, `morada`, `habilitacao`, `curso`, `centro`, `duracao`, `periodo`, `ficha`, `codigo`,  `pagamento`, `como_soube`, `quando`) VALUES ( '$nome', '$tel', '$tel_enc', '$enc', '$morada', '$hab', '$curso', '$centro', '$duracao', '$periodo', '$ficha', '$code', '$pag', '$como', now())";
$set= $conexao->query($ins);

if ($set) {
    echo "obrigado";
}

?>


