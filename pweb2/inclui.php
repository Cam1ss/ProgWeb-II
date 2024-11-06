<?php
if (isset($_POST['matricula'])){
    $conexao = mysqli_connect('localhost','root','','highschool');
    $sql = "INSERT INTO alunos (matricula,nome) VALUES
    ('" . $_POST['matricula'] . "','" . $_POST['nome'] . "')";
    $result = mysqli_query($conexao,$sql);
    ?>
    <script>alert("Aluno cadastrado com sucesso!")</script>
    <script>location.href='index.php'</script>
    <?php
}
?>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de estudantes</title>
</head>
<body>
    <form  method='post' action='inclui.php'>
        <label for="nome">Matrícula:</label><br>
        <input type="text" name="matricula"><br>

        <label for="data">Nome: </label><br>
        <input type="text" name="nome"><br>


        <input type="submit" value="Salvar">
        <input type='button' value="Voltar" onclick="history.back(-1)">
    </form>
</body>
</html>
