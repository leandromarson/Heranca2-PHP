<?php
require_once 'Aluno.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bolsista
 *
 * @author Killer
 */
final class Bolsista extends Aluno{
    private $bolsa;
        
    final function renovarBolsa(){
        echo "<p>".$this->getNome()." renovou a bolsa</p>";
    }
    
    public function pagarMensalidade(){
        echo "<p>".$this->getNome()." pagou mensalidade com ".$this->getBolsa()."% de desconto</p>";
    }
    
    public function __construct($nome, $idade, $sexo, $matricula, $curso, $bolsa) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->setSexo($sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
        $this->bolsa = $bolsa;
    }
    
    public function status(){
        echo "<p>BOLSISTA</p>";
        echo "<table><tr><td><p>Nome: </p></td><td>".$this->getNome()."</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()."</td></tr>";
        echo "<tr><td><p>Sexo: </p></td><td>".$this->getSexo()."</td></tr>";
        echo "<tr><td><p>N. Matricula: </p></td><td>".$this->getMatricula()."</td></tr>";
        echo "<tr><td><p>Bolsa: </p></td><td>".$this->getBolsa()."</td></tr>";
        echo "<tr><td><p>Curso: </p></td><td>".$this->getCurso()."</td></tr></table><br>";
    }
    
    function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }


    
}
