<?php

class Usuario {

    private $pdo;
    
    private $cedula;
    private $nombre;
    private $apellido;
    private $correo;
    private $estado;
    private $contrasena;
    
     public function _CONSTRUCT() {

        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }
    
    function getCedula() {
        return $this->cedula;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getEstado() {
        return $this->estado;
    }

    function getContrasena() {
        return $this->contrasena;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    
  

    public function Listar() {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM usuarios");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id) {
        try {
            $stm = $this->pdo
                    ->prepare("SELECT * FROM usuarios WHERE id = ?");

            
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id) {
        try {
            $stm = $this->pdo
                    ->prepare("DELETE FROM usuarios WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data) {
        try {
            $sql = "UPDATE usuarios SET 
                    nombre    = ?, 
                    apellido = ?,
                    correo           = ?,
                    estado           = ?, 
                    contraseña = ?
                    WHERE cedula = ?";

            $this->pdo->prepare($sql)
                    ->execute(
                            array(
                                $data->nombre,
                                $data->apellido,
                                $data->correo,
                                $data->estado,
                                $data->contrasena,
                                $data->cedula   
                            )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(Usuario $data) {
        try {
            $sql = "INSERT INTO usuarios  
		        VALUES (?, ?, ?, ?, ?,?)";

            $this->pdo->prepare($sql)->execute(
                            array(
                                $data->cedula,
                                $data->nombre,
                                $data->apellido,
                                $data->correo,
                                $data->estado,
                                $data->contrasena
                                
                            )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}

?>