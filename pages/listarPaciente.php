
<h3 style="margin:15px;">Pacientes</h3>
<hr />
<div class="row" style="padding:15px;">
    <div class="col-5">
        <a class="btn btn-info" href="?page=pacienteControle"> <i class="bi bi-file"></i><br /> NOVO</a>
    </div>
    <div class="col-7">
        <form class="d-flex" role="search">            
            <input class="form-control me-2" type="search" placeholder="Pesquise pelo nome do aluno" aria-label="Search">
            <button class="btn btn-info" type="submit"><i class="bi bi-search"></i> Buscar</button>
        </form>
    </div>
</div>


<table class="table">
    <tr>
        <th>NOME</th>
        <th>NASCIMENTO</th>
        <th>SEXO</th>
        <th>RG</th>
        <th>CPF</th>

        <th class="text-center">Editar</th>
        <th class="text-center">Excluir</th>
    </tr>

    <?php foreach ($pacientes as $paciente) { ?>
        <tr>
            <td><?php echo $paciente->nome; ?></td>
            <td><?php echo date('d/m/Y', strtotime($paciente->nascimento)); ?></td>
            <td><?php echo $paciente->sexo; ?></td>
            <td><?php echo $paciente->rg; ?></td>
            <td><?php echo $paciente->cpf; ?></td>
            <td class="text-center">
                <a href="#" class="btn btn-warning">
                    <i class="bi bi-pencil"></i>
                </a>
            </td>
            <td class="text-center">
                <a href="#" class="btn btn-danger">
                    <i class="bi bi-trash"></i>
                </a>
            </td>
        </tr>
    <?php } ?>  
</table>