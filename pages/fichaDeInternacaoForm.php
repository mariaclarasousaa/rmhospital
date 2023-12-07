<h1 class="h3 mb-3 fw-normal form-title-color">Ficha de Internação</h1> 
  <form method="post" action="?page=FichadeInternacaoControle">

<?php if(isset($FichadeInternacao)){
       ?>
       <input type="hidden" name="id" value="<?php echo $receita->id; ?>"/>
       <?php
       $id = $FichadeInternacao->id;
       $nome = $FichadeInternacao->nome;
       $nomeDoResponsavel = $FichadeInternacao->nomeDoResponsavel;
       $datadaInternaçao = $FichadeInternacao->datadaInternaçao;
       $justificativadaInternaçao = $FichadeInternacao->justificativadaInternaçao;

       $acao = "alterar"; 

    }else{
        $id='';
        $nome='';
        $nomeDoResponsavel='';
        $datadaInternaçao='';
        $justificativadaInternaçao='';

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
    <label for="exampleInputEmail1" class="form-label">Id</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="id" value="<?php echo $id; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="nome" value="<?php echo $nome; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome do Responsavel</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nomeDoResponsavel"value="<?php echo $nomeDoResponsavel; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Data da Internaçao</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="datadaInternaçao"value="<?php echo $datadaInternaçao; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Justificativa da Internaçao</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="justificativadaInternaçao" value="<?php echo $justificativadaInternaçao; ?>">
  </div>


  <style>
  .custom-btn-salvar {
    background-color:	#B0C4DE; /* Cor do botao salvar */
    color: #000000; /* Cor do texto no botão salvar */
  }
</style>

<button value="<?php echo $acao; ?>" name="acao" type="submit" class="btn custom-btn-salvar">Salvar</button>

</form>
</form>