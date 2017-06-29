<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoVehiculo
 *
 * @author Ruben
 */
class Solicitud {

    private $pdo;
    private $idSolicitud;
    private $idVehiculo;
    private $idParqueadero;
    private $fecha_solicitud;
  

    function __construct() {

        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }



    
    public function registrar($s) {

        try {
            $sql = "INSERT INTO solicitudes VALUES(?,?,?,?)";


            $this->pdo->prepare($sql)->execute(array($s->idSolicitud, $s->idVehiculo, $s->idParqueadero, $s->fechaSolicitud));
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }

    public function editar($s) {

        try {
            $sql = "UPDATE solicitudes SET id_vehiculo = ?, id_parqueadero= ?, fecha_solicitud = ?,  = ? WHERE id_solicitude = ?";


            $this->pdo->prepare($sql)->execute(array($s->idVehiculo, $s->idParqueadero, $s->fechaSolicitud, $s->idSolicitud));
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }
    
    public function listar(){
        
        try {
            $sql = "SELECT * FROM solicitudes";


            $r = $this->pdo->prepare($sql);
            $r->execute();
            return $r->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
        }
    
    public function listarSolicitud($id){
        
        try {
            $sql = "SELEC * FROM solicitudes WHERE id_solicitude = ?";
            $r = $this->pdo->prepare($sql);
            $r->execute(array($id->idSolicitud));
            return $r->fetch(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
        }
        
         public function eliminar($id){
        
        try {
            $sql = "DELETE FROM solicitudes WHERE id_solicitude = ?";
            $r = $this->pdo->prepare($sql);
            $r->execute(array($id->idSolicitud));
            
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
        }
        
     

}
