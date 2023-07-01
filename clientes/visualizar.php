<?php 
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
$codigo = $_GET['codigo'];

$nome = "";
$cidade = "";
$estado = "";
$peso = "";
$altura = "";
$data_nascimento = "";
$data_ultima_consulta = "";
$sql = "select * from t_cliente where codigo = $codigo";
$todos_os_clientes = mysqli_query($conexao, $sql);
while($um_cliente = mysqli_fetch_assoc($todos_os_clientes)):
    $nome = $um_cliente['nome'];
    $cidade = $um_cliente['cidade'];
    $estado = $um_cliente['estado'];
    $peso = $um_cliente['peso'];
    $altura = $um_cliente['altura'];
    $data_nascimento = $um_cliente['data_nascimento'];
    $data_ultima_consulta = $um_cliente['data_ultima_consulta'];
endwhile;
?>
<h1>Ficha do cliente</h1> 
<table class="table table-striped">
  <tr>
    <td>nome: <?php echo $nome;?></td>
    <td>cidade: <?php echo $cidade . " - " . $estado;?></td>
    <td>peso: <?php echo $peso;?></td>
    <td>altura: <?php echo $altura;?></td>
    <td>data de nascimento: <?php echo $data_nascimento;?></td>
    <td>data da ultima consulta: <?php echo $data_ultima_consulta;?></td>
  </tr>
</table>
<?php 
mysqli_close($conexao);
include "../includes/rodape.php";
?>