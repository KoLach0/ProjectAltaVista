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
class TipoVehiculo {

    private $pdo;
    private $idVehiculo;
    private $nombre;

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

    function getNombre() {
        return $this->nombre;
    }

    function setIdVehiculo($idVehiculo) {
        $this->idVehiculo = $idVehiculo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function registrar($tv) {

        try {
            $sql = "INSERT INTO tipo_vehiculo VALUES(?,?)";


            $this->pdo->prepare($sql)->execute(array($tv->idVehiculo, $tv->nombre));
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }

    public function editar($tv) {

        try {
            $sql = "UPDATE tipo_vehiculo SET nombre = ? WHERE id_tipo_vehiculo = ?";


            $this->pdo->prepare($sql)->execute(array($tv->nombre, $tv->idVehiculo));
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }
    
    public function listar(){
        
        try {
            $sql = "SELECT * FROM tipo_vehiculo";


            $r = $this->pdo->prepare($sql);
            $r->execute();
            return $r->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
        }
    
    public function listarTipoVehiculo($id){
        
        try {
            $sql = "SELEC * FROM tipo_vehiculo WHERE id_tipo_vehiculo = ?";
            $r = $this->pdo->prepare($sql);
            $r->execute(array($id->idVehiculo));
            return $r->fetch(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
        }

}
