<?php
include "conecta.php";
session_start();
$id_tarefa = $_GET['id'];

$sql =  mysqli_query($conexao, "select * from tarefas where id = $id_tarefa;");
while ($linha = $sql->fetch_array()) {
    ?>
        <div class="topo">
            <div class="esquerda">
                <p id="titulo"><?php echo $linha['titulo'];?></p>
                <p id="prioridade"><?php echo $linha['prioridade'];?></p>
            </div>
            <div class="direita">
                <?php
                    $idsubconta = $linha['responsavel'];
                    $insert =  mysqli_query($conexao, "select * from subconta where id = $idsubconta;");
                    while ($var = $insert->fetch_array()) {
                ?>
                <p id="titulo"><?php echo $var['nome'];?></p>
                <?php }?>
                <p id="prioridade"><?php echo $linha['prazo'];?></p>
            </div>
        </div>
        <div class="descricao"><p><?php echo $linha['descricao'];?></p></div>
    <?php
}