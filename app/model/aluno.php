<?php

Class aluno 
{
    private $matricula;
    private $nome;
    private $curso;
    private $serie;


    public function getmatricula(){
        return $this->matricula;
    }
    public function setmatricula($matricula){
        $this->matricula = $matricula;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }
    public function getSerie(){
        return $this->serie;
    }
    public function setSerie($serie){
        $this->serie = $serie;
    }
}