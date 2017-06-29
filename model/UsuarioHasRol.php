<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioHasRol
 *
 * @author Ruben
 */
class UsuarioHasRol {
    private $pdo;
    
    private $usuarioCedula;
    private $idRol;
    
    
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

    function getIdRol() {
        return $this->idRol;
    }

    function setUsuarioCedula($usuarioCedula) {
        $this->usuarioCedula = $usuarioCedula;
    }

    function setIdRol($idRol) {
        $this->idRol = $idRol;
    }

    public function registrar($ur){
            
        try {
            $sql = "INSERT INTO usuarios_has_roles VALUES(?, ?)";


            $this->pdo->prepare($sql)->execute(array($ur->usuarioCedula, $ur->idRol));
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
            
        
    }

}
