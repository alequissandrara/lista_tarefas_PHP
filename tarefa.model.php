<?php

class Tarefa{
    private $id;
    Private $id_status;
    private $tarefa;
    private $data_cadastro;

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this -> $atributo = $valor;
    }
}

?>