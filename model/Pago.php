<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pago
 *
 * @author Ruben
 */
class Pago {

    private $pdo;
    private $idPago;
    private $idApartamento;
    private $tipoPago;
    private $referencia;
    private $valor;
    private $fechaRegistro;
    private $estado;
    private $urlDocumento;

    function __construct() {

        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $exc) {
            die($exc->getMessage());
        }
    }

    function getIdPago() {
        return $this->idPago;
    }

    function getIdApartamento() {
        return $this->idApartamento;
    }

    function getTipoPago() {
        return $this->tipoPago;
    }

    function getReferencia() {
        return $this->referencia;
    }

    function getValor() {
        return $this->valor;
    }

    function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    function getEstado() {
        return $this->estado;
    }

    function getUrlDocumento() {
        return $this->urlDocumento;
    }

    function setIdPago($idPago) {
        $this->idPago = $idPago;
    }

    function setIdApartamento($idApartamento) {
        $this->idApartamento = $idApartamento;
    }

    function setTipoPago($tipoPago) {
        $this->tipoPago = $tipoPago;
    }

    function setReferencia($referencia) {
        $this->referencia = $referencia;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setFechaRegistro($fechaRegistro) {
        $this->fechaRegistro = $fechaRegistro;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setUrlDocumento($urlDocumento) {
        $this->urlDocumento = $urlDocumento;
    }

    public function registrar($pago) {
        try {
            $sql = "INSERT INTO pagos 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)->execute(
                    array(
                        $pago->idPago,
                        $pago->idApartamento,
                        $pago->tipoPago,
                        $pago->referencia,
                        $pago->valor,
                        $pago->fechaRegistro,
                        $pago->estado,
                        $pago->urlDocumento
                    )
            );
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function actualizar($pago) {
        try {
            $sql = "UPDATE pagos SET 
                    id_apartamento    = ?, 
                    tipo_pago  = ?,
                    referencia           = ?,
                    valor           = ?, 
                    fecha  = ?,
                    estado  = ?,
                    url_documento  = ?
                    WHERE id_pago = ?";
            $this->pdo->prepare($sql)->execute(
                    array(
                        $pago->idApartamento,
                        $pago->tipoPago,
                        $pago->referencia,
                        $pago->valor,
                        $pago->fechaRegistro,
                        $pago->estado,
                        $pago->urlDocumento,
                        $pago->idPago
                    )
            );
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function mostrarPagos() {

        try {
            $sql = "SELECT * FROM pagos";


            $r = $this->pdo->prepare($sql);
            $r->execute();
            return $r->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }

    public function mostrarPago($id) {

        try {
            $sql = "SELECT * FROM pagos WHERE id_pagos = ?";


            $r = $this->pdo->prepare($sql);
            $r->execute(array($id));
            return $r->fetch(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo die($exc->getMessage());
        }
    }

}
