<h1 class="h3 mb-3 fw-normal">Cadastro da receita</h1>
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
<button value="<?php echo $acao; ?>" name="acao" type="submit" class="btn btn-primary">Salvar</button>
</form>
</form>