<?php
    include_once('config.php');

    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $cpf = $user_data['cpf'];
                $creci = $user_data['creci'];
                $nome = $user_data['nome'];
            }
        } else {
        header('Location:sistema.php');
        }
        } else {
        header('Location:sistema.php');
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
    display: flex;
    justify-content: center;
    align-items: center;
}
input{
    color: white;
    border: none;
    border-radius: 5px;
    background-color: cornflowerblue;
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
    <a href="sistema.php">voltar</a>
    <div class="container" >
        <form action="saveEdit.php" method="POST" class="row g-2">
        <Legend>Editar Corretor</legend>

            <div class="col-md-6">
                <label for="inputCpf" class="form-label"></label>
                <input type="text" class="form-control" value="<?php echo $cpf?>" name="cpf" id="cpf" maxlength="11" placeholder="Digite Seu CPF" required>
            </div>

            <div class="col-md-6">
                <label for="inputCreci" class="form-label"></label>
                <input type="text" class="form-control" value="<?php echo $creci?>" name="creci" id="creci" minlength="2"  placeholder="Digite Seu Creci" required>
            </div>

            <div class="col-12">
                <label for="inputName" class="form-label"></label>
                <input type="text" class="form-control" value="<?php echo $nome?>" name="nome" id="name" minlength="2" placeholder="Digite Seu Nome" required>
            </div>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            
            <button type="submit" name="update" id="update">Enviar/Alterar</button>

        </form>
</body>
</html>