<h1 class="h3 mb-3 fw-normal">Cadastro de medico</h1>
<form method="post" action="?page=medicoControle">
<?php if(isset($medico)){
       ?>
       <input type="hidden" name="cpf" value="<?php echo $medico->cpf; ?>"/>
       <?php
       $nome = $medico->nome;
       $rg = $medico->rg;
       $cpf = $medico->cpf;
       $crm = $medico->crm;
       $endereco = $medico->endereco;
       $telefone = $medico->telefone;

       $acao = "alterar"; 

    }else{
        $nome='';
        $rg='';
        $crm='';
        $cpf='';
        $endereco='';
        $telefone='';
        $acao = "salvar";
    }
    ?>    

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nome" value="<?php echo $nome; ?>">
  </div> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Rg</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="rg"value="<?php echo $rg; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cpf</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="cpf"value="<?php echo $cpf; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CRM</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="crm" value="<?php echo $crm; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="telefone"value="<?php echo $telefone; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Endereco</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="endereco"value="<?php echo $endereco; ?>">
  </div>
<button value="<?php echo $acao; ?>" name="acao" type="submit" class="btn btn-primary">Salvar</button>
</form>
</form>