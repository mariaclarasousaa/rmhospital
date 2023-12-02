<div class="form-container">
<h1 class="h3 mb-3 fw-normal form-title-color">Receita</h1> 
  <form method="post" action="?page=medicoControle">

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
      background-color: #fff7e5; /* Cor de fundo para todo o corpo */
    }

    .form-container {
      background-color: #9400D3; /* Cor de fundo para o formulário */
      padding: 20px; /* Espaçamento interno para o conteúdo do formulário */
      margin-top: 20px; /* Espaçamento superior */
      border-radius: 10px; /* Borda arredondada para uma aparência mais suave */
    }
    
    /* Adicione esta classe para mudar a cor do texto do formulário */
    .form-text-color {
      color: #000000; /* Cor preta para o texto do formulário */
    }
    /* Mudar a cor do nome do formulário */
    .form-title-color {
      color: #32CD32; /* Cor para o nome do formulário */
    }

  </style>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id_receita</label>
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
    <label for="exampleInputEmail1" class="form-label">Id_medico</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="id_medico"value="<?php echo $id_medico; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id_paciente</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="id_paciente"value="<?php echo $id_paciente; ?>">
  </div>

  <style>
  .custom-btn-salvar {
    background-color: #487aa1; /* Cor verde, você pode substituir pelo código de cor desejado */
    color: #000000; /* Cor do texto no botão, escolha uma que seja legível na cor de fundo */
  }
</style>

<button value="<?php echo $acao; ?>" name="acao" type="submit" class="btn custom-btn-salvar">Salvar</button>


</form>
</form>