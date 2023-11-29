<h1 class="page-header">detpreso</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=detpreso&a=Nuevo">Nuevo detpreso</a>
    <a class="btn btn-primary" href="?c=tbl_prisioneros&a=Nuevo">Nuevo tbl_prisioneros</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">IdPreso</th>
            <th style="width:120px;">Altura</th>
            <th style="width:120px;">Compleccion</th>
            <th style="width:120px;">Tes</th>
            <th style="width:120px;">Peso</th>
            <th style="width:120px;">Nombre</th>
            <th style="width:120px;">FechaN</th>
            <th style="width:120px;">Condena</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->IdPreso; ?></td>
            <td><?php echo $r->Altura; ?></td>
            <td><?php echo $r->Compleccion; ?></td>
            <td><?php echo $r->Tes; ?></td>
            <td><?php echo $r->Peso; ?></td>
            <td><?php echo $r->Nombre; ?></td>
            <td><?php echo $r->FechaN; ?></td>
            <td><?php echo $r->Condena; ?></td>
            <td>
                <a href="?c=detpreso&a=Crud&IdPreso=<?php echo $r->IdPreso; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=detpreso&a=Eliminar&IdPreso=<?php echo $r->IdPreso; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
