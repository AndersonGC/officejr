<?php include 'header.php' ?>

 <h1>Preencha os campos:</h1>


<div class="row">
 <div class="col-sm-6">
 <form class="form-horizontal" method = "POST" action="inserirProjeto.php">

  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" id="nome" name= "nome" >
  </div>

  <div class="form-group">
    <label for="decricao">Descrição:</label>
    <textarea class="form-control" id="descricao" name = "descricao" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="prazoDeEntrega">Prazo entrega:</label>
    <input type="text" class="form-control" id="prazoDeEntrega" name= "prazoDeEntrega">
  </div>

    <div class="form-group required">
    <label class="control-label" for="statusProjeto">Status do projeto:</label>
      <select class="form-control" id="statusProjeto" name="statusProjeto" required>
      <option>Não iniciado</option>
      <option>Em andamento</option>
      <option>Finalizado</option>
         </select>
  </div> <!--fim form-group-->

   <div class="form-group">
    <label for="precoServico">Preço do serviço:</label>
    <input type="text" class="form-control" id="precoServico" name= "precoServico">
  </div>


   <div class="form-group">
    <label for="rua">Código do cliente:</label>
    <input type="text" class="form-control" id="Cliente_codCliente" name= "Cliente_codCliente">
  </div>


	<div class="form-group required">
		<label class="control-label" for="cidade">Dificuldade:</label>
		  <select class="form-control" id="grauDificuldade" name="grauDificuldade" required>
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