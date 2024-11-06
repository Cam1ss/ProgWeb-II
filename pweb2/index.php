<?php
$conexao = mysqli_connect('localhost','root','','highschool');
if(isset($_GET["matricula"])){
    mysqli_query($conexao, "DELETE from alunos WHERE matricula = ' ".$_GET["matricula"] ." ' ");
}
$result = mysqli_query($conexao,'SELECT * FROM alunos');
?>

<input type="button" value="Adicionar Aluno" onclick="add()">

<table border=1>
    <tr>
        <td>Matrícula</td>
        <td>Nome</td>
        <td></td>
    </tr>
<?php
while ($linha = mysqli_fetch_array($result)){
    echo '<tr>';
    echo '<td>' . $linha["matricula"] . '</td>';
    echo '<td>' . $linha["nome"] . '</td>';
    echo '<td> <a href="#" onclick="apagar()">X</a></td>';
    echo '<tr>';
    echo '</tr>';
}
?>
</table>

<script>
    function add(){
        location.href="inclui.php"
    }
    function apagar(matricula){
        teste = confirm('Deseja excluir o aluno '+matricula'?')
        if(teste){
            location.href='index.php?matricula='+matricula)
        }

    }
    </script>
        