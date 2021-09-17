<?php

require_once "pweb/banco_de_dados/conexao.php";

class usuario{
    private String $nome;
    private String $telefone;

    function __construct(String $nome, String $telefone){
        $this->nome = $nome;
        $this->telefone = $telefone;
    }

    public function salvarBD(){
        try {
			$nome = $this->getNome();
            $telefone = $this->getTelefone();

            $stmt = conexao::getConexao()->prepare('INSERT INTO user (nome, telefone) VALUES (:nome, :telefone)');
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":telefone", $telefone);
            $stmt->execute();
        } catch (Exception $err) {
            echo `<div class="exception">` . $err->getMessage() . `</div>`;
            return false;
        }
    }


    public static function listUsuario(){
        try {
            $query = conexao::getConexao()->query('SELECT * FROM usuario');
            $list = $query->fetchAll(PDO::FETCH_ASSOC);
            $usuario = usuario::mapUsuario($list);
            return $usuario;
        } catch (Exception $err) {
            echo `<div class="exeption">` . $err->getMessage() . `</div>`;
            return false;
        }
    }

    private static function mapUsuario($list){
        return array_map(function ($e) {
            $usuario =  new usuario($e['nome'], $e['telefone']);
            $usuario->setTelefone($e['telefone']);
            return $usuario;
        }, $list);
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome(Int $nome){
        $this->nome = $nome;

        return $this;
    }
	   public function getTelefone(){
        return $this->getTelefone;
    }

    public function setTelefone(String $telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }
}