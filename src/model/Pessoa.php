<?php

namespace App\model;

class Pessoa {

    public $nome, $idade, $local;

    function __construct($nome,$idade,$local) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->local = $local;
    }

}

?>