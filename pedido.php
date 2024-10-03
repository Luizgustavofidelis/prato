<?php
require_once("Prato.php");


class Pedido
{
    private $nomeCliente;
    private $nomeGarcom;
    private prato $prato;

    /**
     * Get the value of nomeCliente
     */
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    /**
     * Set the value of nomeCliente
     */
    public function setNomeCliente($nomeCliente): self
    {
        $this->nomeCliente = $nomeCliente;

        return $this;
    }

    /**
     * Get the value of nomeGarcom
     */
    public function getNomeGarcom()
    {
        return $this->nomeGarcom;
    }

    /**
     * Set the value of nomeGarcom
     */
    public function setNomeGarcom($nomeGarcom): self
    {
        $this->nomeGarcom = $nomeGarcom;

        return $this;
    }

    /**
     * Get the value of prato
     */
    public function getPrato(): prato
    {
        return $this->prato;
    }

    /**
     * Set the value of prato
     */
    public function setPrato(prato $prato): self
    {
        $this->prato = $prato;

        return $this;
    }
}
