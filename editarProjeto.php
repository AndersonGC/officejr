<?php include 'header.php' ?>

 <h1>Preencha os campos:</h1>

<?php
   include 'conexao.php';
   $codProjeto = $_GET['codProjeto'];
    //string com o comando sql a ser executado para buscar as cidades
    $sql = "SELECT * FROM projeto_projeto WHERE codProjeto = '".$codProjeto."'";
    //executa o comando sql no banco de dados
    $qr = $conn->query($sql);
    //enquanto existir registro retornado na consulta, carrega no dropdown de cidade
    $linha = $qr->fetch_array();

    $dataP = explode('-', $linha['prazoDeEntrega']); 
    $dataParaExibir = $dataP[2].'/'.$dataP[1].'/'.$dataP[0];
?>

<div class="row">
 <div class="col-sm-6">
 <form class="form-horizontal" method = "POST" action="editarProjeto2.php?codProjeto=<?php echo $linha['codProjeto']; ?>">

  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" id="nomeProjeto" name= "nomeProjeto" value="<?php echo $linha['nomeProjeto']; ?>" >
  </div>

  <div class="form-group">
    <label for="decricao">Descrição:</label>
    <textarea class="form-control" id="descricao" name = "descricao" rows="3 "><?php echo $linha['descricao'];?></textarea>
  </div>

  <div class="form-group">
    <label for="prazoDeEntrega">Prazo entrega:</label>
    <input type="text" class="form-control" id="prazoDeEntrega" name= "prazoDeEntrega" value="<?php echo $dataParaExibir ?>">
  </div>

    <div class="form-group required">
    <label class="control-label" for="statusProjeto">Status do projeto:</label>
      <select class="form-control" id="statusProjeto" name="statusProjeto" value="<?php echo $linha['statusProjeto']; ?>"required>
      <option>Não iniciado</option>
      <option>Em andamento</option>
      <option>Finalizado</option>
         </select>
  </div> <!--fim form-group-->

   <div class="form-group">
    <label for="precoServico">Preço do serviço:</label>
    <input type="text" class="form-control" id="precoServico" name= "precoServico" value="<?php echo $linha['precoServico']; ?>">
  </div>


   <div class="form-group">
    <label for="rua">Código do cliente:</label>
    <input type="text" class="form-control" id="Cliente_codCliente" name= "Cliente_codCliente" value="<?php echo $linha['Cliente_codCliente']; ?>">
  </div>


	<div class="form-group required">
		<label class="control-label" for="cidade">Dificuldade:</label>
		  <select class="form-control" id="grauDificuldade" name="grauDificuldade" value="<?php echo $linha['grauDificuldade']; ?>" required>
      <option>Fácil</option>
      <option>Médio</option>
      <option>Difícil</option>
	       </select>
	</div> <!--fim form-group-->


  <input type="submit" class="btn btn-success btn-sm" name="add_projeto" value= Adicionar ></input>

</form>
</div>
 </div>


<?php include 'footer.php' ?>