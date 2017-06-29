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
class Apartamento {

    private $pdo;
    private $idApartamento;
    private $numeroApto;
    private $apartamentos;
    

    function __construct() {

        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }

    function getIdApartamento() {
        return $this->idApartamento;
    }

    function getNumeroApto() {
        return $this->numeroApto;
    }

    function getApartamentos() {
        return $this->apartamentos;
    }

    function setIdApartamento($idApartamento) {
        $this->idApartamento = $idApartamento;
    }

    function setNumeroApto($numeroApto) {
        $this->numeroApto = $numeroApto;
    }

    function setApartamentos($apartamentos) {
        $this->apartamentos = $apartamentos;
    }

        

    
    public function registrar($a) {

        try {
            $sql = "INSERT INTO apartamentos VALUES(?,?,?)";


            $this->pdo->prepare($sql)->execute(array($a->idApartamento, $a->numeroApto, $a->torre));
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }

    public function editar($a) {

        try {
            $sql = "UPDATE apartamentos SET numeroApto = ?, torre = ? WHERE id_apartamentos = ?";


            $this->pdo->prepare($sql)->execute(array($a->numeroApto, $a->torre, $a->idApartamento));
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }
    
    public function listar(){
        
        try {
            $sql = "SELECT * FROM apartamentos";


            $r = $this->pdo->prepare($sql);
            $r->execute();
            return $r->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
        }
    
    public function listarApartamento($id){
        
        try {
            $sql = "SELEC * FROM apartamentos WHERE id_apartamentos = ?";
            $r = $this->pdo->prepare($sql);
            $r->execute(array($id->idApartamento));
            return $r->fetch(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
        }
        
         public function eliminar($id){
        
        try {
            $sql = "DELETE FROM apartamentos WHERE id_apartamentos = ?";
            $r = $this->pdo->prepare($sql);
            $r->execute(array($id->idApartamento));
            
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
        }
        
     

}
