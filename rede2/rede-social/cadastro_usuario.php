<!DOCTYPE html!>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Professor"/>
	<meta name="description" content="Descrição"/>
	<meta name="keywords" content="Palavras, chaves"/>
	<title>PHP com BD</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<?php include "includes/menu.php" ?>

	<div id="area-principal">
		<div id="postagem">
			<form method="post" action="">
				<fieldset>
				<p>
					<label>Nome do usuário:</label>
					<input type="text" name="usuario" id="usuario"/>
				</p>
				<p>
					<label>E-mail:</label>
					<input type="email" name="email" id="email"/>
				</p>
				<p>
					<label>Senha:</label>
					<input type="password" name="senha" id="senha"/>
				</p>
				<p>
					<label>Repetir a Senha:</label>
					<input type="password" name="senha2" id="senha2"/>
				</p>
				<input type="submit" value="enviar"/>
				<input type="reset" value="limpar"/>
			</fieldset>
			</form>
		</div>
		<div id="postagem">
			<?php
			include "includes/conexao.php";
			if( isset($_POST["usuario"]) ){
				$usuario = $_POST["usuario"];
				$email = $_POST["email"];
				$senha = $_POST["senha"];
				$senha2 = $_POST["senha2"];
				// echo $user;

				$conexao = conecta_mysql();

				$sql = "SELECT email FROM usuarios";
				$query = mysqli_query($conexao, $sql);
				$emails_cadastrados = mysqli_fetch_array($query);

				if($senha != $senha2){
					echo "<p class='redhighlight'>As senhas informadas devem ser iguais</p>";
				}
				else{
					$senha = md5($_POST["senha"]);
					$cadastrado = false;
					foreach( $emails_cadastrados as $email_c ){
						if($email_c == $email){
							$cadastrado = true;
							echo "<p class='redhighlight'>Este E-mail já está cadastrado</p>";
							break;
						}
					}

					if( !$cadastrado ){
						$sql = "INSERT INTO usuarios(usuario, email, senha) VALUES ('$usuario','$email','$senha')";
						if(mysqli_query($conexao, $sql)){
							echo "<p class='highlight'>Cadastro realizado com sucesso</p>";
						}else{
							echo "<p class='redhighlight'>Falha ao realizar o cadastro</p>";
						}
					}
				}
			}

			?>
		</div> <!-- Postagem-->
	</div> <!-- Area principal-->
</body>
</html>
