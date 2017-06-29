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
class Vehiculo {

    private $pdo;
    private $idVehiculo;
    private $idUsuario;
    private $idTipoVehiculo;
    private $marca;
    private $placa;

    function __construct() {

        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }

    function getIdVehiculo() {
        return $this->idVehiculo;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getIdTipoVehiculo() {
        return $this->idTipoVehiculo;
    }

    function getMarca() {
        return $this->marca;
    }

    function getPlaca() {
        return $this->placa;
    }

    function setIdVehiculo($idVehiculo) {
        $this->idVehiculo = $idVehiculo;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setIdTipoVehiculo($idTipoVehiculo) {
        $this->idTipoVehiculo = $idTipoVehiculo;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setPlaca($placa) {
        $this->placa = $placa;
    }

    
    public function registrar($v) {

        try {
            $sql = "INSERT INTO vehiculos VALUES(?,?,?,?,?)";


            $this->pdo->prepare($sql)->execute(array($v->idVehiculo, $v->idUsuario, $v->idTipoVehiculo, $v->marca, $v->placa));
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }

    public function editar($v) {

        try {
            $sql = "UPDATE vehiculos SET id_usuarios = ?, tipo_vehiculo = ?, marca = ?, placa = ? WHERE id_vehiculo = ?";


            $this->pdo->prepare($sql)->execute(array($v->idUsuario, $v->idTipoVehiculo, $v->marca, $v->placa, $v->idVehiculo));
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }
    
    public function listar(){
        
        try {
            $sql = "SELECT * FROM vehiculos";


            $r = $this->pdo->prepare($sql);
            $r->execute();
            return $r->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
        }
    
    public function listarVehiculo($id){
        
        try {
            $sql = "SELEC * FROM vehiculos WHERE id_vehiculo = ?";
            $r = $this->pdo->prepare($sql);
            $r->execute(array($id->idVehiculo));
            return $r->fetch(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
        }
        
         public function eliminar($id){
        
        try {
            $sql = "DELETE FROM vehiculos WHERE id_vehiculo = ?";
            $r = $this->pdo->prepare($sql);
            $r->execute(array($id->idVehiculo));
            
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
        }
        
     

}
