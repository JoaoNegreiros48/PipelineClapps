<?php
include "conecta.php";
session_start();
$id_tarefa = $_GET['id'];
$_SESSION['idTarefa'] = $id_tarefa;

$sql =  mysqli_query($conexao, "select * from tarefas where id = $id_tarefa;");
while ($linha = $sql->fetch_array()) {
?>
    <a onclick="fecharPerfil()" class="material-symbols-outlined" style="margin-left: auto; cursor: pointer;">close</a>
    <form action="./assets/php/editarTarefa.php" method="POST" id="form">
        <div style="display: flex; flex-direction: row; width: 100%;">
            <div style="width: 45%; margin-right: auto;">
                <p id="form-text">Titulo da tarefa</p>
                <input id="email" type="text" value="<?php echo $linha['titulo']; ?>" name="titulo" id="email">
                <p id="form-text">Responsavel</p>
                <select name="responsavel" id="email">
                    <?php
                        $responsavel = $linha['responsavel'];
                        $sql =  mysqli_query($conexao, "select * from subconta where id = $responsavel;");
                        while ($dados = $sql->fetch_array()) {
                            $nomeresponsavel = $dados['nome'];
                        }
                    ?>
                    <option value="<?php echo $responsavel; ?>" selected><?php echo $nomeresponsavel; ?></option>
                    <?php
                    $id = $_SESSION['id'];
                    $sql =  mysqli_query($conexao, "select * from subconta where id_usuario = $id and id <> $responsavel;");
                    while ($dados = $sql->fetch_array()) {
                    ?>
                        <option value="<?php echo $dados['id']; ?>"><?php echo $dados['nome']; ?></option>
                    <?php } ?>
                </select>
                <p id="form-text">Prioridade</p>
                <select name="prioridade" id="email">
                    <option value="<?php echo $linha['prioridade']; ?>" selected> <?php echo $linha['prioridade']; ?> </option>
                    <option value="Não é prioridade">Não é prioridade</option>
                    <option value="Prioridade">Prioridade</option>
                </select>
            </div>
            <div style="width: 45%; margin-left: auto;">
                <p id="form-text">Descrição</p>
                <input id="email" type="text" value="<?php echo $linha['descricao']; ?>" name="descricao" id="email">
                <p id="form-text">Prazo</p>
                <input id="data" type="date" name="data" id="email" value="<?php echo $linha['prazo']; ?>">
            </div>


        </div>
        <span id="line"></span>
        <button type="submit">Editar Tarefa</button>
    </form>
<?php
}
