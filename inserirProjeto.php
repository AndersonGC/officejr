<?php include 'conexao.php';

	$descricao = $_POST["descricao"];
	$statusProjeto = $_POST["statusProjeto"];
	$precoServico = $_POST["precoServico"];
	$prazoDeEntrega = $_POST["prazoDeEntrega"];
	$grauDificuldade = $_POST["grauDificuldade"];
	$Cliente_codCliente = $_POST["Cliente_codCliente"];
	$nome = $_POST["nome"];

	$dataP = explode('/', $prazoDeEntrega);
	$dataBanco = $dataP[2].'-'.$dataP[1].'-'.$dataP[0];


	$SQL = "INSERT INTO projeto_projeto (descricao, statusProjeto, precoServico, prazoDeentrega, dataConclusao, grauDificuldade, Cliente_codCliente, nome) VALUES ('".$descricao."','".$statusProjeto."',".$precoServico.", '".$dataBanco."' ,null ,'".$grauDificuldade."',".$Cliente_codCliente.",'".$nome."')"; 

	if ($conn->query($SQL) === TRUE){
echo "<script>alert('Projeto cadastrado com sucesso.');</script>";
echo "<script>window.location = 'Projetos.php' ;</script>";

} else {
echo "<script>alert('Erro ao cadastrar projeto.');</script>";
echo "Erro: " .$SQL. "<br>" . $conn->error;
}
$conn->close();
?>