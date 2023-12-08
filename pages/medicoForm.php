 <h1 class="h3 mb-3 fw-normal form-title-color">Cadastro Médico</h1> 
  <form method="post" action="?page=medicoControle">

  <?php if(isset($medico)){
       ?>
       <input type="hidden" name="id" value="<?php echo $medico->id; ?>"/>
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


<style>
    body {
      background-color: #DCDCDC; /* Cor de fundo do site */
    }

.form-container {
      background-color: 	#778899; /* Cor de fundo para o formulário */
      padding: 30px; /* Espaçamento interno para o conteúdo do formulário */
      margin-top: 20px; /* Espaçamento superior */
      border-radius: 15px; /* Borda arredondada para uma aparência mais suave */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave para elevação */
    }
    
    /* Adicione esta classe para mudar a cor do texto do formulário */
    .form-text-color {
      color: #000000; /* Cor preta para o texto do formulário (nome, rg...) */
    }
    /* Mudar a cor do nome do formulário */
    .form-title-color {
      color: #000000; /* Cor para o nome do formulário (cadastro) */
    }

  </style>

<div class="form-container">
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
  </div><br>

<style>
  .custom-btn-salvar {
    background-color:	#B0C4DE; /* Cor do botao salvar */
    color: #000000; /* Cor do texto no botão salvar */
  }
</style>

<button value="<?php echo $acao; ?>" name="acao" type="submit" class="btn custom-btn-salvar">Salvar</button>

</form>
</form>


