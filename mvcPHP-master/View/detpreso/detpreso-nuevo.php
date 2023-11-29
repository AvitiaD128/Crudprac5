<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=detpreso">detpreso</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-detpreso" action="?c=detpreso&a=Guardar" method="post" enctype="multipart/form-data">

<div class="form-group">
        <label>Altura</label>
        <input type="text" name="Altura" value="<?php echo $pvd->Altura; ?>" class="form-control" placeholder="Ingrese " data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Compleccion</label>
        <input type="text" name="Compleccion" value="<?php echo $pvd->Compleccion; ?>" class="form-control" placeholder="Ingrese " data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Tes</label>
        <input type="text" name="Tes" value="<?php echo $pvd->Tes; ?>" class="form-control" placeholder="Ingrese Tes " data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Peso</label>
        <input type="text" name="Peso" value="<?php echo $pvd->Peso; ?>" class="form-control" placeholder="Ingrese Peso " data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $pvd->Nombre; ?>" class="form-control" placeholder="Ingrese Nombre " data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>FechaN</label>
        <input type="date" name="FechaN" value="<?php echo $pvd->FechaN; ?>" class="form-control" placeholder="Ingrese FechaN " data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Condena</label>
        <input type="text" name="Condena" value="<?php echo $pvd->Condena; ?>" class="form-control" placeholder="Ingrese Condena " data-validacion-tipo="requerido|min:10" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-detpreso").submit(function(){
            return $(this).validate();
        });
    })
</script>
