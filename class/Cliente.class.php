<?php
class Cliente {
    public $nConta;
    public $tConta;
    private $nRegistro;
    private $saldo;
    private $limite;

    //definindo metodo com passagem de parametros 
    function setCliente($nConta, $tConta, $nRegistro, $saldo, $limite){
        $this->nConta = $nConta;
        $this->tConta = $tConta;
        $this->nRegistro = $nRegistro;
        $this->saldo = $saldo;
        $this->limite = $limite;
    }
    function exibirDadoCliente(){
        echo "Numero da Conta: {$this->nConta}<br>";
        echo "Tipo da Conta: {$this->tConta}<br>";
        echo "Numero Registro: {$this->nRegistro}<br>";
        echo "Saldo: {$this->saldo}<br>";
        echo "Limite: {$this->limite}<br>";
        echo "<hr>";
    }
    function depositar($valor){
        $this->saldo = $this->saldo + $valor;
    }
    function sacar($valor){
        if($valor<=$this->saldo + $this->limite){

            $this->saldo = $this->saldo - $valor; 
        
        } else {
        
          echo "Saldo Insuficiente.<br> Saldo em Conta: {$this->saldo} "; 
          echo "<hr>";
        }

    }
}