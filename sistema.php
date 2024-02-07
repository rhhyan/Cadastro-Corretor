<?php
session_start();

include_once('config.php');

$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $conexao->query($sql);

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
    <div class="container" >
        <form action="formulario.php" method="POST" class="row g-2">
        <Legend>Cadastro De Corretor</legend>

            <div class="col-md-6">
                <label for="inputCpf" class="form-label"></label>
                <input type="text" class="form-control" name="cpf" id="cpf"  minlength="11" maxlength="11" placeholder="Digite Seu CPF" required>
            </div>

            <div class="col-md-6">
                <label for="inputCreci" class="form-label"></label>
                <input type="number" class="form-control" name="creci" id="creci"  minlength="2"  maxlength="8" placeholder="Digite Seu Creci" required>
            </div>

            <div class="col-12">
                <label for="inputName" class="form-label"></label>
                <input type="text" class="form-control" name="nome" id="name" minlength="2"  maxlength="20" placeholder="Digite Seu Nome" required>
            </div>
            
            <button type="submit" name="submit" id="submit">Enviar</button>

        </form>
        

        <div class="form-group ">
    <table class="table table-striped table-hover">
        <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Cpf</th>
        <th scope="col">Creci</th>
        <th scope="col">Nome</th>
        <th scope="col">...</th>
        </tr>
        </thead>
    <tbody>

        <?php
            while($user_data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td >".$user_data['id']."</td>";
                echo "<td>".$user_data['cpf']."</td>";
                echo "<td>".$user_data['creci']."</td>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td>
                
                <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]' title='Editar'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                </svg>
                </a> 
                <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]' title='Deletar'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                    </svg>
                </a>
                </td>";
            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
</div>
</div>

</body>
</html>