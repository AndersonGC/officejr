<?php include 'conexao.php';
	
	$codProjeto = $_GET['codProjeto'];


	$SQL = "DELETE FROM projeto_projeto WHERE codProjeto = ".$codProjeto.";";
	if($conn->query($SQL)=== TRUE){
		echo "<script>alert('Projeto foi excluido com sucesso!');</script>";
		echo "<script>window.location = 'Projetos.php';</script>";
	}else{
		echo "<script>alert('Erro ao excluir projeto!');</script>";
		echo "Erro: ".$SQL. "<br>" . $conn->error;
	}
