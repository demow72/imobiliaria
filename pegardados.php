<?php
echo "v4 ";


require "conecta.php";

$nome = $_POST['nome'];


echo $nome;
$sql = "INSERT INTO usuarios(name) VALUES ('$nome')";

	$resultado = pg_query($conexao,$sql);
		if($resultado)
		{
			echo "Cadastro realizado com sucesso.";
		}else
		{
			echo "Não foi possível inserir no banco.";
		}

?>