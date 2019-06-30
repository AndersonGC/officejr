<?php include 'conexao.php';

	$cpf = $_POST["cpf"];
	$nome = $_POST["nome"];
	$telefone = $_POST["telefone"];
	$areaAtuacao = $_POST["areaAtuacao"];
	$nCasa = $_POST["nCasa"];
	$rua = $_POST["rua"];
	$bairro = $_POST["bairro"];
	$cep = $_POST["cep"];
	$curso = $_POST["curso"];
	$cidade_codigo = $_POST["cidade_codigo"];

	$SQL = "INSERT INTO projeto_integrante (cpf, nome, telefone, areaAtuacao, nCasa, rua, bairro, cep, curso, cidade_codigo)
	VALUES ('".$cpf."','".$nome."','".$telefone."','".$areaAtuacao."',".$nCasa.",'".$rua."','".$bairro."','".$cep."','".$curso."',".$cidade_codigo.")";

	if ($conn->query($SQL) === TRUE){
echo "<script>alert('Membro inserido com sucesso.');</script>";
echo "<script>window.location = 'membros.php' ;</script>";

} else {
echo "<script>alert('Erro ao inserir o membro.');</script>";
echo "Erro: " .$SQL. "<br>" . $conn->error;
}
$conn->close();
?>