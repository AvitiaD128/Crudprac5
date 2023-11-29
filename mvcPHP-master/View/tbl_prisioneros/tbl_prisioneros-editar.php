<h1 class="page-header">
    <?php echo $prod->id_preso != null ? $prod->apellido : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=tbl_prisioneros">presos</a></li>
  <li class="active"><?php echo $prod->id_preso != null ? $prod->apellido : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-tbl_prisioneros" action="?c=tbl_prisioneros&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_preso" value="<?php echo $prod->id_preso; ?>" />

    <div class="form-group">
        <label>Nombre </label>
        <input type="text" name="nombre" value="<?php echo $prod->nombre; ?>" class="form-control" placeholder="Ingrese nombre " data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="apellido" value="<?php echo $prod->apellido; ?>" class="form-control" placeholder="Ingrese apellido preso" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>fechaN</label>
        <input type="date" name="fechaN" value="<?php echo $prod->fechaN; ?>" class="form-control" placeholder="Ingrese FechaN" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Estado</label>
        <input type="text" name="estado" value="<?php echo $prod->estado; ?>" class="form-control" placeholder="Ingrese el Estado" data-validacion-tipo="requerido|min:240" />
    </div>
    <div class="form-group">
        <label>Direccion </label>
        <input type="text" name="direccion" value="<?php echo $prod->direccion; ?>" class="form-control" placeholder="Ingrese la direccion" data-validacion-tipo="requerido|min:240" />
    </div>
    <div class="form-group">
        <label>Sexo</label>
        <input type="text" name="sexo" value="<?php echo $prod->sexo; ?>" class="form-control" placeholder="Ingrese el sexo del preso" data-validacion-tipo="requerido|min:240" />
    </div>
    <div class="form-group">
        <label>MotivoEncierro</label>
        <input type="text" name="motEnc" value="<?php echo $prod->motEnc; ?>" class="form-control" placeholder="Ingrese El MotivoEncierro" data-validacion-tipo="requerido|min:240" />
    </div>
    

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-tbl_prisioneros").submit(function(){
            return $(this).validate();
        });
    })
</script>
