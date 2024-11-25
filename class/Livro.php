<?php
include_once "Conectar.php";

class Livro
{
    public $codigo_livro;
    public $codigo_autor;
    public $genero;
    public $subgenero;
    public $titulo_livro;
    public $ano_livro;
    public $editora;
    public $classificacao;
    public $sinopse;
    public $caracteristicas;
    public $link;
    public $imagem;
    private $apiKey = "AIzaSyAdlt936P2ydJLBddRWFsvCS2-eZCddtxA";
    public $con;

    public function setImagem($imagemPath) {
        $this->imagem = $imagemPath;
    }

    public function salvar()
{
    try {
        $this->con = new Conectar();
        $sql = "INSERT INTO livro (codigo_livro, codigo_autor, genero, subgenero, titulo_livro, ano_livro, editora, classificacao, sinopse, data_cadastro, caracteristicas, link, imagem) 
                VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $executar = $this->con->prepare($sql);
        $executar->bindValue(1, $this->codigo_autor);
        $executar->bindValue(2, $this->genero);
        $executar->bindValue(3, $this->subgenero);
        $executar->bindValue(4, $this->titulo_livro);
        $executar->bindValue(5, $this->ano_livro);
        $executar->bindValue(6, $this->editora);
        $executar->bindValue(7, $this->classificacao);
        $executar->bindValue(8, $this->sinopse);
        $executar->bindValue(9, date("Y-m-d"));
        $executar->bindValue(10, $this->caracteristicas);
        $executar->bindValue(11, $this->link);
        $executar->bindValue(12, $this->imagem);
        $executar->execute();
        return "Cadastrado";
    } catch (PDOException $e) {
        return "Erro de bd " . $e->getMessage();
    }
}

public function update($id)
{
    try {
        $this->con = new Conectar();
        $sql = "UPDATE livro 
                SET codigo_autor = ?, genero = ?, subgenero = ?, titulo_livro = ?, ano_livro = ?, editora = ?, classificacao = ?, sinopse = ?, caracteristicas = ?, link = ?, imagem = ? 
                WHERE codigo_livro = ?;";
        $executar = $this->con->prepare($sql);
        $executar->bindValue(1, $this->codigo_autor);
        $executar->bindValue(2, $this->genero);
        $executar->bindValue(3, $this->subgenero);
        $executar->bindValue(4, $this->titulo_livro);
        $executar->bindValue(5, $this->ano_livro);
        $executar->bindValue(6, $this->editora);
        $executar->bindValue(7, $this->classificacao);
        $executar->bindValue(8, $this->sinopse);
        $executar->bindValue(9, $this->caracteristicas);
        $executar->bindValue(10, $this->link);
        $executar->bindValue(11, $this->imagem);
        $executar->bindValue(12, $id);
        $executar->execute();
        return "Atualizado";
    } catch (PDOException $e) {
        return "Erro de bd " . $e->getMessage();
    }
}

function consultar($isbn)
    {
        $url = 'https://www.googleapis.com/books/v1/volumes?q=isbn:' . urlencode($isbn) . '&key=' . $this->apiKey;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
            curl_close($ch);
            throw new Exception("cURL error occurred: $error_msg");
        }

        curl_close($ch);

        $data = json_decode($response, true);

        return isset($data['items']) && count($data['items']) > 0;
    }


    public function listar(int $id = null)
    {
        try {
            $this->con = new Conectar();
            $sql = "SELECT * FROM livro WHERE ano_livro = 2024";
           
            
            if ($id != null) {
                $sql .= " AND codigo_livro = :id";
            }
            $executar = $this->con->prepare($sql);
            if ($id != null) {
                $executar->bindValue(':id', $id, PDO::PARAM_INT);
            }
            $executar->execute();
            return $executar->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro de bd " . $e->getMessage();
        }
        
    }
    public function listarr(int $id = null)
    {
        try {
            $this->con = new Conectar();
            // Alterado para restringir livros com classificação entre 14 e 16 anos
            $sql = "SELECT * FROM livro WHERE classificacao >= 14 AND classificacao <= 16";
            
            if ($id != null) {
                $sql .= " AND codigo_livro = :id";
            }
            
            $executar = $this->con->prepare($sql);
            if ($id != null) {
                $executar->bindValue(':id', $id, PDO::PARAM_INT);
            }
            $executar->execute();
            return $executar->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro de bd " . $e->getMessage();
        }
    }

    public function listarrr(int $id = null)
    {
        try {
            $this->con = new Conectar();
            $sql = "SELECT * FROM livro WHERE genero = 'terror' OR subgenero = 'terror'";
            
           
            
            if ($id != null) {
                $sql .= " AND codigo_livro = :id";
            }
            $executar = $this->con->prepare($sql);
            if ($id != null) {
                $executar->bindValue(':id', $id, PDO::PARAM_INT);
            }
            $executar->execute();
            return $executar->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro de bd " . $e->getMessage();
        }
        
    }

    public function listarrrr(int $id = null)
    {
        try {
            $this->con = new Conectar();
            $sql = "SELECT * FROM livro WHERE classificacao <= 12";
           
            
            if ($id != null) {
                $sql .= " AND codigo_livro = :id";
            }
            $executar = $this->con->prepare($sql);
            if ($id != null) {
                $executar->bindValue(':id', $id, PDO::PARAM_INT);
            }
            $executar->execute();
            return $executar->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro de bd " . $e->getMessage();
        }
        
    }
    public function listarrrr18(int $id = null)
    {
        try {
            $this->con = new Conectar();
            $sql = "SELECT * FROM livro WHERE classificacao >= 18";
           
            
            if ($id != null) {
                $sql .= " AND codigo_livro = :id";
            }
            $executar = $this->con->prepare($sql);
            if ($id != null) {
                $executar->bindValue(':id', $id, PDO::PARAM_INT);
            }
            $executar->execute();
            return $executar->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro de bd " . $e->getMessage();
        }
        
    }

    public function listarrrra(int $id = null)
    {
        try {
            $this->con = new Conectar();
            $sql = "SELECT * FROM livro WHERE genero = 'romanc' OR subgenero = 'romanc'";
            
           
            
            if ($id != null) {
                $sql .= " AND codigo_livro = :id";
            }
            $executar = $this->con->prepare($sql);
            if ($id != null) {
                $executar->bindValue(':id', $id, PDO::PARAM_INT);
            }
            $executar->execute();
            return $executar->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro de bd " . $e->getMessage();
        }
        
    }
    
    public function listarGenero(string $genero)
    {
        try {
            $this->con = new Conectar();
            $sql = "SELECT * FROM livro WHERE genero = :genero";
            
            $executar = $this->con->prepare($sql);
            $executar->bindValue(':genero', $genero, PDO::PARAM_STR);
            $executar->execute();
            
            return $executar->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro de bd " . $e->getMessage();
            return [];
        }
    }
    
    public function listarSubgenero(string $subgenero)
    {
        try {
            $this->con = new Conectar();
            $sql = "SELECT * FROM livro WHERE subgenero = :subgenero";
            
            $executar = $this->con->prepare($sql);
            $executar->bindValue(':subgenero', $subgenero, PDO::PARAM_STR);
            $executar->execute();
            
            return $executar->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro de bd " . $e->getMessage();
            return [];
        }
    }
    public function listarCaracteristicas(string $caracteristicas)
    {
        try {
            $this->con = new Conectar();
            $sql = "SELECT * FROM livro WHERE caracteristicas = :caracteristicas";
            
            $executar = $this->con->prepare($sql);
            $executar->bindValue(':caracteristicas', $caracteristicas, PDO::PARAM_STR);
            $executar->execute();
            
            return $executar->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro de bd " . $e->getMessage();
            return [];
        }
    }
    
   

    
    
}
