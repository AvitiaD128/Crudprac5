<h1 class="page-header">tbl_prisioneros </h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=detpreso&a=Nuevo">Nuevo Detalle De Preso</a>
    <a class="btn btn-primary" href="?c=tbl_prisioneros&a=Nuevo">Nuevo Prisionero</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">IDPRESO</th>
            <th style="width:120px;">NOMBRE</th>
            <th style="width:120px;">APELLIDO</th>
            <th style="width:120px;">FECHAN</th>
            <th style="width:120px;">ESTADO</th>
            <th style="width:120px;">DIRECCION</th>
            <th style="width:120px;">SEXO</th>
            <th style="width:120px;">MOTIVOENCIERRO</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id_preso; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->apellido; ?></td>
            <td><?php echo $r->fechaN; ?></td>
            <td><?php echo $r->estado; ?></td>
            <td><?php echo $r->direccion; ?></td>
            <td><?php echo $r->sexo; ?></td>
            <td><?php echo $r->motEnc; ?></td>
            <td>
                <a href="?c=tbl_prisioneros&a=Crud&id_preso=<?php echo $r->id_preso; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=tbl_prisioneros&a=Eliminar&id_preso=<?php echo $r->id_preso; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
