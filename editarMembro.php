<?php include 'header.php' ?>

 <h1>Editar Membro</h1>
<?php
   include 'conexao.php';
   $cpf = $_GET['cpf'];
    //string com o comando sql a ser executado para buscar as cidades
    $sql = "SELECT * FROM projeto_integrante WHERE cpf = '".$cpf."'";
    //executa o comando sql no banco de dados
    $qr = $conn->query($sql);
    //enquanto existir registro retornado na consulta, carrega no dropdown de cidade
    $linha = $qr->fetch_array()  ?>


<div class="row">
 <div class="col-sm-6">
 <form class="form-horizontal" method = "POST" action="editarMembro2.php?cpf=<?php echo $linha['cpf']; ?>">

  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" id="nome" name= "nome" value="<?php echo $linha['nome']; ?>">
  </div>

  <div class="form-group">
    <label for="telefone">Telefone:</label>
    <input type="text" class="form-control" id="telefone" name= "telefone" value="<?php echo $linha['telefone']; ?>">
  </div>

   <div class="form-group">
    <label for="curso">Curso:</label>
    <input type="text" class="form-control" id="curso" name= "curso" value="<?php echo $linha['curso']; ?>">
  </div>

   <div class="form-group">
    <label for="areaAtuacao">Area de Atuação:</label>
    <input type="text" class="form-control" id="areaAtuacao" name= "areaAtuacao" value="<?php echo $linha['areaAtuacao']; ?>">
  </div>

 <h3>Endereço:</h3>

   <div class="form-group">
    <label for="rua">Rua:</label>
    <input type="text" class="form-control" id="rua" name= "rua" value="<?php echo $linha['rua']; ?>">
  </div>

   <div class="form-group">
    <label for="nCasa">Nº:</label>
    <input type="text" class="form-control" id="nCasa" name= "nCasa" value="<?php echo $linha['nCasa']; ?>">
  </div>

   <div class="form-group">
    <label for="bairro">Bairro:</label>
    <input type="text" class="form-control" id="bairro" name= "bairro" value="<?php echo $linha['bairro']; ?>">
  </div>

  <div class="form-group">
    <label for="cep">Cep:</label>
    <input type="text" class="form-control" id="cep" name= "cep" value="<?php echo $linha['cep']; ?>">
  </div>


	<div class="form-group required">
		<label class="control-label" for="cidade">Cidade:</label>
		  <select class="form-control" id="cidade_codigo" name="cidade_codigo" required>
	           <?php
	           include 'conexao.php';
					//string com o comando sql a ser executado para buscar as cidades
					$sql = "SELECT * FROM projeto_cidade  ORDER BY nome ASC";
					//executa o comando sql no banco de dados
					$qr = $conn->query($sql);
					//enquanto existir registro retornado na consulta, carrega no dropdown de cidade
	            while ($linha = $qr->fetch_assoc()) { 
	                echo '<option value="' . $linha['codigo'] . '">' . $linha['nome'] . '</option>';
	            } // fim while
				?>
	       </select>
	</div> <!--fim form-group-->


  <input type="submit" class="btn btn-success btn-sm" name="edit_membro" value= Confirmar ></input>

</form>
</div>
 </div>


<?php include 'footer.php' ?>