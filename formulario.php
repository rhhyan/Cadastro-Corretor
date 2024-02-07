<?php
    
    if(isset($_POST['submit']))
    {
        include_once('config.php');
        $cpf = $_POST['cpf'];
        $creci = $_POST['creci'];
        $nome = $_POST['nome'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(cpf,creci,nome) 
        VALUES ('$cpf','$creci','$nome')");

        header('Location: sistema.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Corretor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<style>
* {
    box-sizing: border-box;
}

legend{
    text-align: center;
    font-weight: 700;
    margin: 0;
    padding: 0;
}

body{
    display:flex;
    justify-content: center;
    align-items: center;
}

button{
    border: none;
    border-radius: 5px;
    color: white;
    background-color: blue;
}
</style>


</head>
<body>
    <div class="text-center" >
        <div class="row algin-items-center">
        <form action="sistema.php" method="POST" class="row g-2">
        <Legend>Iniciar Sistema</legend>
            <button type="submit" name="submit" id="submit">Iniciar</button>

        </form>
</div>
</div>

</body>
</html>
