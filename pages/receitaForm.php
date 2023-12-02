
<h1 class="h3 mb-3 fw-normal form-title-color">Receita</h1> 
  <form method="post" action="?page=receitaControle">

<?php if(isset($receita)){
       ?>
       <input type="hidden" name="id" value="<?php echo $receita->id; ?>"/>
       <?php
       $id_receita = $receita->id_receita;
       $data = $receita->data;
       $descricao = $receita->descricao;
       $id_medico = $receita->id_medico;
       $id_paciente = $receita->id_paciente;


       $acao = "alterar"; 
    }else{
        $id_receita='';
        $data='';
        $descricao='';
        $id_medico='';
        $id_paciente='';
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
    <label for="exampleInputEmail1" class="form-label">Id Receita</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="id_receita" value="<?php echo $id_receita; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Data</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="data" value="<?php echo $data; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Descricao</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="descricao"value="<?php echo $descricao; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id Médico</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="id_medico"value="<?php echo $id_medico; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id Paciente</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="id_paciente"value="<?php echo $id_paciente; ?>">
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