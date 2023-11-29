<?php
require_once 'model/tbl_prisioneros.php';

class tbl_prisionerosController{

    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new tbl_prisioneros();
    }
    
    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/tbl_prisioneros/tbl_prisioneros.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $prod = new tbl_prisioneros();

        if(isset($_REQUEST['id_preso'])){
            $prod = $this->model->Obtener($_REQUEST['id_preso']);
        }

        require_once 'view/header.php';
        require_once 'view/tbl_prisioneros/tbl_prisioneros-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $prod = new tbl_prisioneros();

        require_once 'view/header.php';
        require_once 'view/tbl_prisioneros/tbl_prisioneros-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $prod = new tbl_prisioneros();

        $prod->id_preso = $_REQUEST['id_preso'];
        $prod->nombre = $_REQUEST['nombre'];
        $prod->apellido = $_REQUEST['apellido'];
        $prod->fechaN = $_REQUEST['fechaN'];
        $prod->estado = $_REQUEST['estado'];
        $prod->direccion = $_REQUEST['direccion'];
        $prod->sexo = $_REQUEST['sexo'];
        $prod->motEnc = $_REQUEST['motEnc'];

        $this->model->Registrar($prod);

        header('Location: index.php?c=tbl_prisioneros');
    }

    public function Editar(){
        $prod = new tbl_prisioneros();

        $prod->id_preso = $_REQUEST['id_preso'];
        $prod->nombre = $_REQUEST['nombre'];
        $prod->apellido = $_REQUEST['apellido'];
        $prod->fechaN = $_REQUEST['fechaN'];
        $prod->estado = $_REQUEST['estado'];
        $prod->direccion = $_REQUEST['direccion'];
        $prod->sexo = $_REQUEST['sexo'];
        $prod->motEnc = $_REQUEST['motEnc'];

        $this->model->Actualizar($prod);

        header('Location: index.php?c=tbl_prisioneros');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_preso']);
        header('Location: index.php');
    }
}
