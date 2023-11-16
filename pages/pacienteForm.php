<h1 class="h3 mb-3 fw-normal">Cadastro de paciente</h1>
<form method="post" action="?page=pacienteControle">
<?php if(isset($paciente)){
       ?>
       <input type="hidden" name="cpf" value="<?php echo $paciente->cpf; ?>"/>
       <?php
       $nome = $paciente->nome;
       $acao = "alterar"; 
    }else{
        $nome='';
        $acao = "salvar";
    }
    ?>    

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nome" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" >
    <div id="emailHelp" class="form-text">Não mostraremos seu email para outra pessoa</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nascimento</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="nascimento">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Rg</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="rg">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cpf</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="cpf">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sexo</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="sexo">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="telefone">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Municipio</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="municipio">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Estado civil</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="estadoCivil">
  </div>
  <label for="inputPassword5" class="form-label">Senha</label>
<input type="password" id="inputPassword5" class="form-control" name="senha">
<div id="passwordHelpBlock" class="form-text">
  Sua senha deve possuir 8-20 caracteres, contendo letras, numeros e simbolos.
</div><br>
<button value="salvar" name="acao" type="submit" class="btn btn-primary">Salvar</button>
</form>