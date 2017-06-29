<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rol
 *
 * @author Ruben
 */
class Rol {
    private $pdo;
    
    private $idRol;
    private $nombre;
    
    function __construct() {
        
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
            
        }
        
        function getIdRol() {
            return $this->idRol;
        }

        function getNombre() {
            return $this->nombre;
        }

        function setIdRol($idRol) {
            $this->idRol = $idRol;
        }

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function registrar($rol){
            
            try {
                $sql = "INSERT INTO roles VALUES(?, ?)";


                $this->pdo->prepare($sql)->execute(array($rol->idRol, $rol->nombre));
            } catch (Exception $exc) {
                echo die($exc->getMessage());
            }
                    
            
        }
        
        public function editar($rol){
            
            $sql="UPDATE roles SET nombre = ? WHERE id_roles = ?";
            
            $this->pdo->prepare($sql)->execute(array($rol->nombre, $rol->idRol));
            
        }

}
