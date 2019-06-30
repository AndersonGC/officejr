<?php include 'conexao.php';

	$cpf = $_GET["cpf"];
	$nome = $_POST["nome"];
	$telefone = $_POST["telefone"];
	$areaAtuacao = $_POST["areaAtuacao"];
	$nCasa = $_POST["nCasa"];
	$rua = $_POST["rua"];
	$bairro = $_POST["bairro"];
	$cep = $_POST["cep"];
	$curso = $_POST["curso"];
	$cidade_codigo = $_POST["cidade_codigo"];

	$SQL = "UPDATE projeto_integrante SET cpf = '".$cpf."', nome =  '".$nome."', telefone = '".$telefone."', areaAtuacao = '".$areaAtuacao."', nCasa = ".$nCasa.", rua = '".$rua."', bairro = '".$bairro."', cep = '".$cep."', curso = '".$curso."', cidade_codigo = ".$cidade_codigo." WHERE cpf = '".$cpf."' ";

	if ($conn->query($SQL) === TRUE){
echo "<script>alert(' Membro editado com sucesso.');</script>";
echo "<script>window.location = 'membros.php' ;</script>";

} else {
echo "<script>alert('Erro ao editar o membro.');</script>";
echo "Erro: " .$SQL. "<br>" . $conn->error;
}
$conn->close();
?>