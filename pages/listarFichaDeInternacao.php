<h3 style="margin:15px;">Ficha de Internação</h3>
<hr />
<div class="row" style="padding:15px;">
    <div class="col-5">
        <a class="btn btn-info" href="?page=FichadeInternacaoControle"> <i class="bi bi-file"></i><br />Novo</a>
    </div>
    <div class="col-7">
    <form class="d-flex" role="search" method="post" action="?page=FichadeInternacaoControle">            
            <input class="form-control me-2" type="search" placeholder="Pesquise pelo id da FichadeInternacao" aria-label="Search" name="filtro">
            <button value="buscar" name="acao" class="btn btn-info" type="submit"><i class="bi bi-search"></i>Buscar</button>
        </form>
    </div>
</div>


<table class="table">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>DATA DA INTERNAÇÃO</th>
        <th>JUSTIFICATIVA DA INTERNAÇÃO</th>
                  
        <th class="text-center">EDITAR</th>
        <th class="text-center">EXCLUIR</th>
    </tr>



    <?php
if (!empty($FichadeInternacaos) && (is_array($FichadeInternacoes) || is_object($FichadeInternacoes))) {
?>
    <table class="table">
        <?php foreach ($FichadeInternacoes as $FichadeInternacao) { ?>
            <tr>
                <td><?php echo $FichadeInternacao->id; ?></td>
                <td><?php echo $FichadeInternacao->nome; ?></td>
                <td><?php echo date('d/m/Y', strtotime($FichadeInternacao->datadaInternaçao)); ?></td>
                <td><?php echo $FichadeInternacao->justificativadaInternaçao; ?></td>

                <td class="text-center">
                    <a href="?page=fichaDeInternacaoControle&acao=get&id=<?php echo $fichaDeInternacao->id; ?>" class="btn btn-warning">
                        <i class="bi bi-pencil"></i>
                    </a>
                </td>
                <td class="text-center">
                    <a href="?page=fichaDeInternacaoControle&acao=excluir&id=<?php echo $fichaDeInternacao->id; ?>" class="btn btn-danger">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php
}
?>