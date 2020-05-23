<table border = '2'>

<tr>
  <th>ID</th>
  <th>Sala</th>
  <th>Dia</th>
  <th>Alunos que faltaram</th>
</tr>

<?php include("conn.php");


$sqltipo = "SELECT * FROM faltas";


$resulta = mysql_query($sqltipo, $connection);

if ($resulta->num_rows > 0){

    while ( $row = $resulta->fetch_assoc()){            

        echo '<tr>';
        echo '<td>'. $row['ID'] .'</td>';
        echo '<td>'. $row['sala'] .'</td>';
        echo '<td>'. $row['dia'] .'</td>';
        echo '<td>'. $row['alunosfalt'] .'</td>';
        echo '</tr>';
    }
}
?>
</table>