<?php include 'header.php' ?>

 <h1>Clientes</h1>

<?php
include 'conexao.php';
	//string com o comando sql a ser executado para buscar as cidades
	$sql = "SELECT * FROM projeto_projeto AS pp JOIN projeto_cliente AS pc WHERE pp.Cliente_codCliente = pc.codCliente ORDER BY pc.nome ASC";
	//executa o comando sql no banco de dados
	$qr = $conn->query($sql);
	//enquanto existir registro retornado na consulta, carrega no dropdown de cidade
while ($linha = $qr->fetch_array()) { 
?>

<div class="card  mx-sm 3 mb-2">
  <div class="card-body">
    <h5 class="card-title"><i class="fas fa-user"></i> <?php echo $linha['nome']?></h5>
    <p class="card-text"><i class="fas fa-folder"></i> <?php echo $linha['nomeProjeto']?></p>
    <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#perfil-<?php echo $linha['codCliente']; ?>" title="perfil">
    <i class="fas fa-eye"></i></a>


        <!-- inicio modal -->
        <div class="modal fade" id="perfil-<?php echo $linha['codCliente']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title text-center" id="myModalLabel">
                Perfil do cliente:
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <i class="fas fa-user"></i> <?php echo $linha['nome']?><br>
                <i class="fas fa-link"></i> <?php echo $linha['codCliente']?><br>
                <i class="fas fa-phone"></i> <?php echo $linha['telefone']?><br>
                <i class="fas fa-map-marker-alt"></i> <?php echo $linha['rua']?>, 
                <?php echo $linha['nCasa']?>, 
                <?php echo $linha['bairro']?>,
                <?php echo $linha['Cidade_codigo']?>  

                </div>
                <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Fechar</button>
                <!--<input type="button" data-toggle="modal" data-target="#confirm-submit" class="btn btn-success" name="atualizar" value="Atualizar" id="myBtn"></input>-->
              </div>
            </div>
          </div>
        </div>
<!-- Fim Modal -->




  </div>
</div>
<?php
}
?>
<?php include 'footer.php' ?>