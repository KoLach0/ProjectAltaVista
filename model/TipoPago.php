<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoPago
 *
 * @author Ruben
 */
class TipoPago {
   
    private $pdo;
    
    private $idTipoPago;
    private $nombre;
    
    function __construct() {
        try {

            $this->pdo = Database::StartUp();
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
            
    }
    
    function getIdTipoPago() {
        return $this->idTipoPago;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdTipoPago($idTipoPago) {
        $this->idTipoPago = $idTipoPago;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function registrar($tipoPago){
        
        try {
            $sql = "INSERT INTO tipo_pago VALUES(?,?)";


            $this->pdo->prepare($sql)->execute(array($tipoPago->idTipoPago, $tipoPago->nombre));
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
            
        
    }
    public function editar($tipoPago){
        
        try {
            $sql = "UPDATE tipo_pago SET nombre = ? WHERE id_tipo_pago = ?";


            $this->pdo->prepare($sql)->execute(array($tipoPago->nombre,$tipoPago->idTipoPago));
            
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
            
        
    }

}
