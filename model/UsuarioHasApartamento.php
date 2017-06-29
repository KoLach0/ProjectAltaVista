<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioHasApartamento
 *
 * @author Ruben
 */
class UsuarioHasApartamento {
   
    private $pdo;
    
    private $usuarioCedula;
    private $idApartamento;
    private $residente;
    private $propietario;
    
    
    function __construct() {
        
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }
    
    function getUsuarioCedula() {
        return $this->usuarioCedula;
    }

    function getIdApartamento() {
        return $this->idApartamento;
    }

    function getResidente() {
        return $this->residente;
    }

    function getPropietario() {
        return $this->propietario;
    }

    function setUsuarioCedula($usuarioCedula) {
        $this->usuarioCedula = $usuarioCedula;
    }

    function setIdApartamento($idApartamento) {
        $this->idApartamento = $idApartamento;
    }

    function setResidente($residente) {
        $this->residente = $residente;
    }

    function setPropietario($propietario) {
        $this->propietario = $propietario;
    }

    public function insertar($ua){
        
        try {
            $sql = "INSERT INTO usuarios_has_apartamentos VALUER(?, ?, ?, ?)";


            $this->pdo->prepare($sql)->execute(array($ua->usuarioCedula,                                            
                    $ua->idApartamento,
                    $ua->residente,
                    $ua->propietario));
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
            
    }

    
    
}
