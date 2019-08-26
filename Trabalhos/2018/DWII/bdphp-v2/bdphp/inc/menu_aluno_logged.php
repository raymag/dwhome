<?php
$first_name = explode(" ", $_SESSION["nome"])[0];
if(isset($first_name[11])){
    $first_name = substr($first_name, 0, 11)."...";
}
?>
<div id="menu">
    <div id="menu-area">
        <h1 id="menu-logo">IF<span class="secondary-color">/</span>SYS
         - <?php echo $first_name ?></h1>
        <div id="menu-links">
            <a href="logout.php">Sair</a>
        </div>
    </div>
</div>