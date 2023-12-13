<h3 style="margin:15px;">Medico</h3>
<hr/>
<div class="row" style="padding:15px;">
    <div class="col-5">
        <a class="btn btn-info" href="?page=medicoControle"> <i class="bi bi-file"></i><br /> Novo</a>
    </div>
    <div class="col-7">
    <form class="d-flex" role="search" method="post" action="?page=medicoControle">            
            <input class="form-control me-2" type="search" placeholder="Pesquise pelo nome do medico" aria-label="Search" name="filtro">
            <button value="buscar" name="acao" class="btn btn-info" type="submit"><i class="bi bi-search"></i> Buscar</button>
        </form>
    </div>
</div>


<table class="table">
    <tr>
        <th>NOME</th>
        <th>RG</th>
        <th>CPF</th>
        <th>ENDEREÇO</th>
        <th>TELEFONE</th>
        <th>CRM</th>

        <th class="text-center">EDITAR</th>
        <th class="text-center">EXCLUIR</th>
    </tr>

    <?php foreach ($medicos as $medico) { ?>
    <tr>
        <td><?php echo isset($medico->nome) ? $medico->nome : ''; ?></td>
        <td><?php echo isset($medico->rg) ? $medico->rg : ''; ?></td>
        <td><?php echo isset($medico->cpf) ? $medico->cpf : ''; ?></td>
        <td><?php echo isset($medico->endereco) ? $medico->endereco : ''; ?></td>
        <td><?php echo isset($medico->telefone) ? $medico->telefone : ''; ?></td>
        <td><?php echo isset($medico->crm) ? $medico->crm : ''; ?></td>

        <td class="text-center">
            <a href="?page=medicoControle&acao=get&id=<?php echo $medico->id; ?>" class="btn btn-warning">
                <i class="bi bi-pencil"></i>
            </a>
        </td>
        <td class="text-center">
            <a href="?page=medicoControle&acao=excluir&id=<?php echo $medico->id; ?>" class="btn btn-danger">
                <i class="bi bi-trash"></i>
            </a>
        </td>
    </tr>
    <?php } ?>  
</table>



