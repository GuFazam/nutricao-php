<?php 
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>
<p>
    <a href="novo.php">Adicionar cliente</a>
</p>
<h2>Lista de clientes</h2>
<table border="1">
    <tr>
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
    <?php 
    $sql = "select * from t_cliente";
    $todos_os_clientes = mysqli_query($conexao, $sql);
    while($um_cliente = mysqli_fetch_assoc($todos_os_clientes)):
        ?>
        <tr>
            <td><?php echo $um_cliente['codigo']; ?></td>
            <td><?php echo $um_cliente['nome'];?></td>
            <td><?php echo $um_cliente['cidade'];?></td>
            <td><?php echo $um_cliente['estado'];?></td>
            <td><?php echo $um_cliente['peso'];?></td>
            <td><?php echo $um_cliente['altura'];?></td>
            <td><?php echo $um_cliente['data_nascimento'];?></td>
            <td><?php echo $um_cliente['data_ultima_consulta'];?></td>
            <td>
                <a href="visualizar.php?codigo=<?php echo $um_cliente['codigo'];?>" title="Ver completo">visualizar</a>
                <a href="editar.php?codigo=<?php echo $um_cliente['codigo'];?>">editar</a>
                <a href="deletar.php?codigo=<?php echo $um_cliente['codigo'];?>">excluir</a>
            </td>
        </tr>
        <?php
    endwhile;
    ?>
</table>
<?php 
mysqli_close($conexao);
include "../includes/rodape.php";
?>