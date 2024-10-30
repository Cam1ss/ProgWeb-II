<?php
$conexao = mysqli_connect('localhost', 'root','','HighSchool');
$result = mysqli_query($conexao, 'select * from Alunos' );
?>

<table>
    <tr>
        <td>Matrícula:</td>
        <td>Nome:</td>
    </tr>
</table>

<?php
while($linha = mysqli_fetch_array($result)){
    echo "<tr>";
    echo '<td>' $linha["matricula"] .'</td>';
    echo '<td>' echo $linha["nome"] .'</td>';
    echo "</tr>";
}
?>