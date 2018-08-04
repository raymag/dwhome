<?php 
$first_name = explode(" ", $_SESSION["nome_adm"])[0];
if(isset($first_name[11])){
    $first_name = substr($first_name, 0, 11)."...";
}
?>
<div id="menu">
    <div id="menu-area">
        <h1 id="menu-logo">IF<span class="secondary-color">/</span>SYS
         - <?php echo $first_name?></h1>
        <div id="menu-links">
            <a href="cadastro-alunos.php">Adicionar Aluno</a>
            <a href="listar-alunos.php">Listar Alunos</a>
            <a href="cadastro-disciplinas.php">Cadastrar Disciplinas</a>
            <a href="listar-disciplinas.php">Listar Disciplinas</a>
            <a href="logout.php">Sair</a>
        </div>
    </div>
</div>