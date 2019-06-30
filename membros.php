<?php include 'header.php' ?>

 <h1>Membros da Office Jr.:</h1>

 <a href="adicionarMembro.php" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Adicionar membro</a>


 <br>
 </br>
   <?php
   include 'conexao.php';
		//string com o comando sql a ser executado para buscar as cidades
		$sql = "SELECT * FROM projeto_integrante  ORDER BY nome ASC";
		//executa o comando sql no banco de dados
		$qr = $conn->query($sql);
		//enquanto existir registro retornado na consulta, carrega no dropdown de cidade
    while ($linha = $qr->fetch_array()) { 
	?>

		<div class="card border mb-3" style="max-width: 18rem;">
				<div class="card-header"><h5><i class= "fas fa-user"></i>  <?php echo $linha['nome']?></h5></div>
				<div class="card-body text-secondary">
				<p class="card-text"><i class= "fas fa-phone"></i>  <?php echo $linha['telefone']?><br>
				<i class= "fas fa-book"></i>  <?php echo $linha['curso']?> </p>

				<a href= "editarMembro.php?cpf=<?php echo $linha['cpf']; ?> " class=" btn btn-warning btn-sm"><i class="fas fa-pen"></i></a>

				<a href= "removerMembro.php?cpf=<?php echo $linha['cpf']; ?> " class=" btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>



			</div>
		</div>

	<?php
	} // fim while
	?>
 


<?php include 'footer.php' ?>