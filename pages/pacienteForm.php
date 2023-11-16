<h1 class="h3 mb-3 fw-normal">Cadastro de paciente</h1>
<form method="post" action="?page=pacienteControle">
<?php if(isset($paciente)){
       ?>
       <input type="hidden" name="cpf" value="<?php echo $paciente->cpf; ?>"/>
       <?php
       $nome = $paciente->nome;
       $nascimento = $paciente->nascimento;
       $sexo = $paciente->sexo;
       $bairro = $paciente->bairro;
       $rg = $paciente->rg;
       $cpf = $paciente->cpf;
       $telefone = $paciente->telefone;
       $email = $paciente->email;

       $acao = "alterar"; 
    }else{
        $nome='';
        $nascimento='';
        $sexo='';
        $bairro='';
        $rg='';
        $cpf='';
        $telefone='';
        $email='';
        $acao = "salvar";
    }
    ?>    

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nome" value="<?php echo $nome; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email; ?>">
    <div id="emailHelp" class="form-text">Não mostraremos seu email para outra pessoa</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nascimento</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="nascimento" value="<?php echo $nascimento; ?>">
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
    <label for="exampleInputEmail1" class="form-label">Sexo</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="sexo"value="<?php echo $sexo; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="telefone"value="<?php echo $telefone; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Bairro</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="bairro"value="<?php echo $bairro; ?>">
  </div>
<button value="<?php echo $acao; ?>" name="acao" type="submit" class="btn btn-primary">Salvar</button>
</form>
</form>