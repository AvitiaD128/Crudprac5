<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/detpreso.php';

class detpresoController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new detpreso();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/detpreso/detpreso.php';
        require_once 'view/footer.php';
    }

    //Llamado a la vista detpreso-editar
    public function Crud(){
        $pvd = new detpreso();

        //Se obtienen los datos del detpreso a editar.
        if(isset($_REQUEST['IdPreso'])){
            $pvd = $this->model->Obtener($_REQUEST['IdPreso']);
        }

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/detpreso/detpreso-editar.php';
        require_once 'view/footer.php';
  }

    //Llamado a la vista detpreso-nuevo
    public function Nuevo(){
        $pvd = new detpreso();

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/detpreso/detpreso-nuevo.php';
        require_once 'view/footer.php';
    }

    //Método que registrar al modelo un nuevo detpreso.
    public function Guardar(){
        $pvd = new detpreso();

        //Captura de los datos del formulario (vista).
        $pvd->IdPreso = $_REQUEST['IdPreso'];
        $pvd->Altura = $_REQUEST['Altura'];
        $pvd->Compleccion = $_REQUEST['Compleccion'];
        $pvd->Tes = $_REQUEST['Tes'];
        $pvd->Peso = $_REQUEST['Peso'];
        $pvd->Nombre = $_REQUEST['Nombre'];
        $pvd->FechaN = $_REQUEST['FechaN'];
        $pvd->Condena = $_REQUEST['Condena'];

        //Registro al modelo detpreso.
        $this->model->Registrar($pvd);

        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) RECompleccionECT al
        //navegador
        header('Location: index.php');
    }

    //Método que modifica el modelo de un detpreso.
    public function Editar(){
        $pvd = new detpreso();

        $pvd->IdPreso = $_REQUEST['IdPreso'];
        $pvd->Altura = $_REQUEST['Altura'];
        $pvd->Compleccion = $_REQUEST['Compleccion'];
        $pvd->Tes = $_REQUEST['Tes'];
        $pvd->Peso = $_REQUEST['Peso'];
        $pvd->Nombre = $_REQUEST['Nombre'];
        $pvd->FechaN = $_REQUEST['FechaN'];
        $pvd->Condena = $_REQUEST['Condena'];
       

        $this->model->Actualizar($pvd);

        header('Location: index.php');
    }

    //Método que elimina la tupla detpreso con el IdPreso dado.
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['IdPreso']);
        header('Location: index.php');
    }
}
