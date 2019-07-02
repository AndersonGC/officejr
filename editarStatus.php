<?php include 'conexao.php';

	$codProjeto = $_GET["codProjeto"];
	$statusProjeto = $_POST["situacao"];
	$dataConclusao = $_POST["dataConclusao"];


	if(empty($dataConclusao))
	{
		
	$SQL = "UPDATE projeto_projeto SET  statusProjeto =  '".$statusProjeto."',  dataConclusao = null WHERE codProjeto = '".$codProjeto."' ";

	}else{

	$dataP = explode('/', $dataConclusao);
	$dataBanco = $dataP[2].'-'.$dataP[1].'-'.$dataP[0];
	$SQL = "UPDATE projeto_projeto SET  statusProjeto =  '".$statusProjeto."',  dataConclusao = '".$dataBanco."' WHERE codProjeto = '".$codProjeto."' ";
	}





if ($conn->query($SQL) === TRUE){
	echo "<script>alert(' Status editado com sucesso.');</script>";
	echo "<script>window.location = 'Projetos.php' ;</script>";

} else {
	echo "<script>alert('Erro ao atualizar status do projeto.');</script>";
	echo "Erro: " .$SQL. "<br>" . $conn->error;
}
$conn->close();
?>
