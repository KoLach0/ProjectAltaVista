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
class Parqueadero {

    private $pdo;
    private $idParqueadero;
    private $estado;
   
    

    function __construct() {

        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }

    
    function getIdParqueadero() {
        return $this->idParqueadero;
    }

    function getEstado() {
        return $this->estado;
    }

    function setIdParqueadero($idParqueadero) {
        $this->idParqueadero = $idParqueadero;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

            

    
    public function registrar($p) {

        try {
            $sql = "INSERT INTO  VALUES(?,?)";


            $this->pdo->prepare($sql)->execute(array($p->idParqueadero, $p->estado));
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }

    public function editar($p) {

        try {
            $sql = "UPDATE parqueaderos SET   estado = ? WHERE id_parqueadero = ?";


            $this->pdo->prepare($sql)->execute(array($p->estado, $p->idParqueadero));
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }
    
    public function listar(){
        
        try {
            $sql = "SELECT * FROM parqueaderos ";


            $r = $this->pdo->prepare($sql);
            $r->execute();
            return $r->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
        }
    
    public function listarParqueadero($id){
        
        try {
            $sql = "SELEC * FROM parqueaderos  WHERE id_parqueadero = ?";
            $r = $this->pdo->prepare($sql);
            $r->execute(array($id->idParqueadero));
            return $r->fetch(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
        }
        
         public function eliminar($id){
        
        try {
            $sql = "DELETE FROM parqueaderos WHERE id_parqueadero = ?";
            $r = $this->pdo->prepare($sql);
            $r->execute(array($id->idParqueadero));
            
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
        }
        
     

}
