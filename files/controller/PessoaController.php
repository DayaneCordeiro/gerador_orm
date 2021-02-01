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
        if (mysqli_query($conn, "INSERT INTO pessoa VALUES(DEFAULT, '"' . $this->getNome() . '"', '"' . $this->getIdade() . '"', '"' . $this->getSituacao() . '"')")) {
            $last_id = mysqli_insert_id($conn);
            return $last_id;
        }
    }

    // Read Function
    public function read($parameters = false) {
        // Verify if there's parameters to include on query
        $select     = (!empty($parameters['select'])) ? $parameters['select'] : '*';
        $joins      = (!empty($parameters['joins'])) ? $parameters['joins'] : null;
        $conditions = (!empty($parameters['conditions'])) ? $parameters['conditions'] : null;
        $group      = (!empty($parameters['group'])) ? $parameters['group'] : null;
        $order      = (!empty($parameters['order'])) ? $parameters['order'] : null;
        
        $sql   = "SELECT".$select."FROM pessoa ". $joins . $conditions . $group . $order;
        $query = $conn->query($sql);
		$data  = array();
        $i     = 0;
        
		while ($row = mysqli_fetch_assoc($query)) {
		        $data[$i] = $row;
		        $i++;
		    }
		 	return $data;
		}
    }

    // Updates Function
    public static function update($parameters) {			
        mysqli_query($conn, "UPDATE pessoa SET " . $parameters['data'] . " WHERE id = '" . $parameters['id'] . "'");
    }
}
        