<?php
require_once 'Aluno.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tecnico
 *
 * @author Killer
 */
final class Tecnico extends Aluno{
    private $registroProfissional;
    
    function getRegistroProfissional() {
        return $this->registroProfissional;
    }

    function setRegistroProfissional($registroProfissional) {
        $this->registroProfissional = $registroProfissional;
    }

    public function praticar(){
        echo "<p>".$this->getNome()." está praticando...</p>";
    }
    
    public function status(){
        echo "<p>TECNICO</p>";
        echo "<table><tr><td><p>Nome: </p></td><td>".$this->getNome()."</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()."</td></tr>";
        echo "<tr><td><p>Sexo: </p></td><td>".$this->getSexo()."</td></tr>";
        echo "<tr><td><p>N. Matricula: </p></td><td>".$this->getMatricula()."</td></tr>";
        echo "<tr><td><p>N. Registro Profissional: </p></td><td>".$this->getRegistroProfissional()."</td></tr>";
        echo "<tr><td><p>Curso: </p></td><td>".$this->getCurso()."</td></tr></table><br>";
    }
    
    public function __construct($nome, $idade, $sexo, $matricula, $curso, $registroProfissional) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->setSexo($sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
        $this->registroProfissional = $registroProfissional;
    }
    
}
