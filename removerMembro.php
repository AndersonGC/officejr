<?php include 'conexao.php';
	
	$cpf = $_GET['cpf'];


	$SQL = "DELETE FROM projeto_integrante WHERE cpf = ".$cpf.";";
	if($conn->query($SQL)=== TRUE){
		echo "<script>alert('Membro foi excluido com sucesso!');</script>";
		echo "<script>window.location = 'membros.php';</script>";
	}else{
		echo "<script>alert('Erro ao excluir membro!');</script>";
		echo "Erro: ".$SQL. "<br>" . $conn->error;
	}
