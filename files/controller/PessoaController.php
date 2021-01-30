<?php
class Pessoa {
    // Atributes
    private $nome
    private $idade
    private $situacao

    // Constructor
    public function __construct($nome, $idade, $situacao) {
         $this->setNome($nome);
         $this->setIdade($idade);
         $this->setSituacao($situacao);

    }

    // Getters and Setters
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getSituacao() {
        return $this->situacao;
    }

    public function setSituacao($situacao) {
        $this->situacao = $situacao;
    }


    // Create Function
    public function create() {
        if (mysqli_query($con, "INSERT INTO pessoa VALUES(DEFAULT, '"' . $this->getNome() . '"', '"' . $this->getIdade() . '"', '"' . $this->getSituacao() . '"')")) {
            $last_id = mysqli_insert_id($con);
            return $last_id;
        }
    }
}
        