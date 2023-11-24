<h3 style="margin:15px;">Receita</h3>
<hr />
<div class="row" style="padding:15px;">
    <div class="col-5">
        <a class="btn btn-info" href="?page=receitaControle"> <i class="bi bi-file"></i><br /> Novo</a>
    </div>
    <div class="col-7">
    <form class="d-flex" role="search" method="post" action="?page=receitaControle">            
            <input class="form-control me-2" type="search" placeholder="Pesquise pelo id da receita" aria-label="Search" name="filtro">
            <button value="buscar" name="acao" class="btn btn-info" type="submit"><i class="bi bi-search"></i> Buscar</button>
        </form>
    </div>
</div>


<table class="table">
    <tr>
        <th>ID_RECEITA</th>
        <th>DATA</th>
        <th>DESCRICAO</th> 
        <th>ID_PACIENTE</th>
        <th>ID_MEDICO</th>
                  
        <th class="text-center">EDITAR</th>
        <th class="text-center">EXCLUIR</th>
    </tr>

    <?php foreach ($receita as $receita) { ?>
        <tr>
            <td><?php echo $receita->id_receita; ?></td>
            <td><?php echo $receita->data; ?></td>
            <td><?php echo $receita->descricao; ?></td>
            <td><?php echo $receita->id_medico; ?></td>
            <td><?php echo $receita->id_paciente; ?></td>

            <td class="text-center">
            <a href="?page=receitaControle&acao=get&id=<?php echo $receita->id_receita; ?>" class="btn btn-warning">
                    <i class="bi bi-pencil"></i>
                </a>
            </td>
            <td class="text-center">
            <a href="?page=receitaControle&acao=excluir&id=<?php echo $receita->id_receita; ?>" class="btn btn-danger">
                    <i class="bi bi-trash"></i>
                </a>
            </td>
        </tr>
    <?php } ?>  
</table>