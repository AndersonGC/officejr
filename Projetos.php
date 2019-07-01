<?php include 'header.php' ?>

 <h1>Projetos</h1>

 <a href="adicionarProjeto.php" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Adicionar projeto</a>


 <br>
 </br>
   <?php
   include 'conexao.php';
    //string com o comando sql a ser executado para buscar as cidades
    $sql = "SELECT * FROM projeto_projeto  ORDER BY nome ASC";
    //executa o comando sql no banco de dados
    $qr = $conn->query($sql);
    //enquanto existir registro retornado na consulta, carrega no dropdown de cidade
    while ($linha = $qr->fetch_array()) { 
    $dataP = explode('-', $linha['prazoDeEntrega']); 
    $dataParaExibir = $dataP[2].'/'.$dataP[1].'/'.$dataP[0];
    ?>

    <div class="card border mb-3" style="max-width: 18rem;">
        <div class="card-header"><h5><i class= "fas fa-folder"></i>  <?php echo $linha['nome']?></h5></div>
        <div class="card-body text-secondary">
          <p class="card-text"><i class="fas fa-cog"></i>  <?php echo $linha['statusProjeto']?>                                    <a href="" style="color: red" data-toggle="modal" data-target="#situacao-{$estoria->getId()}" title="Editar status">
          <i class="fas fa-edit"></i>
          </a><br>

        <p class="card-text"><i class="fas fa-globe"></i>  <?php echo $linha['descricao']?><br>
        <i class="fas fa-calendar-alt"></i>  <?php echo $dataParaExibir?></p>

        <a href= "editarProjeto.php?codProjeto=<?php echo $linha['codProjeto']; ?> " class=" btn btn-warning btn-sm"><i class="fas fa-pen"></i></a>

        <a href= "removerProjeto.php?codProjeto=<?php echo $linha['codProjeto']; ?> " class=" btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>

        <!-- inicio modal -->
        <div class="modal fade" id="situacao-{$estoria->getId()}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title text-center" id="myModalLabel">
                Editar status do projeto
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">

                <label class="control-label" for="situacao">Selecione o status:</label>
                <select class="form-control" id=situacao name="situacao">
                <option value="1">Não Iniciada</option>
                <option value="2">Em andamento</option>
                <option value="3">Finalizado</option>
                </select>
                </div>
                <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Fechar</button>
                <input type="submit" class="btn btn-success" name="atualizar" value="Atualizar"></input>
                <!--<input type="button" data-toggle="modal" data-target="#confirm-submit" class="btn btn-success" name="atualizar" value="Atualizar" id="myBtn"></input>-->
                </form>
              </div>
            </div>
          </div>
        </div>
<!-- Fim Modal -->
      </div>
    </div>

  <?php
  } // fim while
  ?>


 


<?php include 'footer.php' ?>