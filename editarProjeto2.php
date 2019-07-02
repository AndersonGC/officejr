<?php include 'conexao.php';

	$codProjeto = $_GET["codProjeto"];
	$descricao = $_POST["descricao"];
	$statusProjeto = $_POST["statusProjeto"];
	$precoServico = $_POST["precoServico"];
	$prazoDeEntrega = $_POST["prazoDeEntrega"];
	$grauDificuldade = $_POST["grauDificuldade"];
	$Cliente_codCliente = $_POST["Cliente_codCliente"];
	$nomeProjeto = $_POST["nomeProjeto"];

	$dataP = explode('/', $prazoDeEntrega);
	$dataBanco = $dataP[2].'-'.$dataP[1].'-'.$dataP[0];

	$SQL = "UPDATE projeto_projeto SET descricao = '".$descricao."', statusProjeto =  '".$statusProjeto."', precoServico = ".$precoServico.", prazoDeEntrega = '".$dataBanco."', grauDificuldade = '".$grauDificuldade."', Cliente_codCliente = ".$Cliente_codCliente.", nomeProjeto = '".$nomeProjeto."' WHERE codProjeto = '".$codProjeto."' ";

	if ($conn->query($SQL) === TRUE){
echo "<script>alert(' Projeto editado com sucesso.');</script>";
echo "<script>window.location = 'Projetos.php' ;</script>";

} else {
echo "<script>alert('Erro ao editar projeto.');</script>";
echo "Erro: " .$SQL. "<br>" . $conn->error;
}
$conn->close();
?>