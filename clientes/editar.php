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
<h1>Editar cliente <?php echo $codigo; ?></h1>
<form method="post" action="atualizar.php?codigo=<?php echo $codigo;?>">
    Nome: <input name="nome" type="text" value="<?php echo $nome;?>"><br>
    Cidade: <input name="cidade" type="text" value="<?php echo $cidade;?>"><!--br-->
    Estado: <input name="estado" type="text" value="<?php echo $estado;?>"><br>
    Peso: <input name="peso" type="number" value="<?php echo $peso;?>"><br>
    Altura: <input name="altura" type="text" value="<?php echo $altura;?>"><br>
    Data de Nascimento: <input name="data_nascimento" type="date" value="<?php echo $data_nascimento;?>"><br>
    Data da Ultima Consulta: <input name="data_ultima_consulta" type="date" value="<?php echo $data_ultima_consulta;?>"><br>
    <button type="submit">Atualizar</button>
</form>

<?php 
mysqli_close($conexao);
include "../includes/rodape.php";
?>