<?php
class Usuario {

    //declaração dos atrubutos da classe
    //encapsulamento (-) se é publico (+) se é privado (#) se é protegido
    public $nome;
    public $email;
    public $celular;

    //function PHP são os metodos

    function getUsuario($nome,$email,$celular){
        return "Nome do cliente: {$nome}, tem o E-mail: {$email}, e o telefone: {$celular}";
    }
    
    function exibirCliente(){
        echo "Nome do Cliente: {$nome}<br>";
        echo "E-mail: {$email}<br>";
        echo "<br>";
    }
}