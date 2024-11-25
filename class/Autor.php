<?php

include_once 'Conectar.php';

class Autor
{

    private $codigo_autor;
    private $nome_autor;
    private $email;
    private $senha;
    private $verificar_senha;
    private $con;

    public function getCodigo_autor()
    {
        return $this->codigo_autor;
    }



    public function getNome_autor()
    {
        return $this->nome_autor;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getVerificar_Senha()
    {
        return $this->verificar_senha;
    }

    public function setCodigo_autor($codigo_autor)
    {
        $this->codigo_autor = $codigo_autor;
    }

    public function setNome_autor($nome_autor)
    {
        $this->nome_autor = $nome_autor;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function setVerificar_senha($verificar_senha)
    {
        $this->verificar_senha = $verificar_senha;
    }


    public function salvar()
    {
        try {
            $this->con = new Conectar();
            $sql = "INSERT INTO autor (nome_autor, email, senha, verificar_senha) VALUES (?, ?, ?, ?);";
            $executar = $this->con->prepare($sql);
            // $executar->bindValue(1, $this->codigo_autor);
            $executar->bindValue(1, $this->nome_autor);
            $executar->bindValue(2, $this->email);
            $executar->bindValue(3, sha1($this->senha));
            $executar->bindValue(4, sha1($this->verificar_senha));
            return $executar->execute() == 1 ? "Cadastrado" : "Erro";
        } catch (PDOException $e) {
            echo "Erro de bd " . $e->getMessage();
        }
    }



    public function listar($codigo_autor)
    {
        try {
            $this->con = new Conectar();
            $sql = "CALL listar_autor (?)";
            $executar = $this->con->prepare($sql);
            $executar->bindValue(1, $codigo_autor);

            return $executar->execute() == 1 ? $executar->fetchAll() : false;
        } catch (PDOException $e) {
            echo "Erro de bd " . $e->getMessage();
        }
    }




    public function crud($opcao)
    {
        try {
            $this->con = new Conectar();
            $sql = "CALL crud_autor(?, ?, ?, ?, ?, ?)";
            $executar = $this->con->prepare($sql);
            $executar->bindValue(1, $this->codigo_autor);
            $executar->bindValue(2, $this->nome_autor);
            $executar->bindValue(3, $this->email);
            $executar->bindValue(4, sha1($this->senha));
            $executar->bindValue(5, sha1($this->verificar_senha));
            $executar->bindValue(6, $opcao);
            return $executar->execute() == 1 ? "Procedimento ok" : "Erro";
        } catch (PDOException $e) {
            echo "Erro de bd " . $e->getMessage();
        }
    }

    public function consultar()
    {
        try {
            $this->con = new Conectar();
            $sql = "SELECT * FROM autor where nome_autor = ? AND email = ? AND senha = ?";
            $ligacao = $this->con->prepare($sql);
            $ligacao->bindValue(1, $this->nome_autor);
            $ligacao->bindValue(2, $this->email);
            $ligacao->bindValue(3, sha1($this->senha));
            return $ligacao->execute() == 1 ? $ligacao->fetchAll() : false;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
