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
  <tr class="table-dark">
  <td>Código</td>
        <td>Nome</td>
        <td>Cidade</td>
        <td>Estado</td>
        <td>Peso</td>
        <td>Altura</td>
        <td>Data de Nascimento</td>
        <td>Data da Ultima Consulta</td>
        <td>Ações</td>
  </tr>
  <tr>
    <td><?php echo $nome;?></td>
    <td><?php echo $cidade . " - " . $estado;?></td>
    <td><?php echo $peso;?></td>
    <td><?php echo $altura;?></td>
    <td><?php echo date('d/m/Y', strtotime($data_nascimento));?></td>
    <td><?php echo date('d/m/Y', strtotime($data_ultima_consulta));?></td>
  </tr>
  
</table>
<?php 
mysqli_close($conexao);
include "../includes/rodape.php";
?>