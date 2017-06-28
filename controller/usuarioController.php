<?php
require_once 'model/usuario.php';

class UsuarioController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
    }
    
    public function Index(){
        
        require_once 'view/administrador.php';
        
        
    }
    
    public function Crud(){
        $alm = new Usuario();
        
        if(isset($_REQUEST['cedula'])){
            $alm = $this->model->Obtener($_REQUEST['cedula']);
        }
        
        require_once 'view/header.php';
        require_once 'view/alumno/alumno-editar.php';
        require_once 'view/footer.php';
    }
    
//    public function Guardar(){
//        $alm = new Usuario();
//        
//        $alm->id = $_REQUEST['id'];
//        $alm->Nombre = $_REQUEST['Nombre'];
//        $alm->Apellido = $_REQUEST['Apellido'];
//        $alm->Correo = $_REQUEST['Correo'];
//        $alm->Sexo = $_REQUEST['Sexo'];
//        $alm->FechaNacimiento = $_REQUEST['FechaNacimiento'];
//
//        $alm->id > 0 
//            ? $this->model->Actualizar($alm)
//            : $this->model->Registrar($alm);
//        
//        header('Location: index.php');
//    }
//    
//    public function Eliminar(){
//        $this->model->Eliminar($_REQUEST['id']);
//        header('Location: index.php');
//    }
}