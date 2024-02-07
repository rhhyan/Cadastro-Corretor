<?php
    include_once('config.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $cpf = $_POST['cpf'];
        $creci = $_POST['creci'];
        $nome = $_POST['nome'];

        $sqlUpdate = "UPDATE usuarios 
        SET cpf='$cpf',creci='$creci',nome='$nome'
        WHERE id=$id";

        $result = $conexao->query($sqlUpdate);
}
header('Location: sistema.php');
?>