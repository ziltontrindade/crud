<?php

require_once 'models/Usuario.php';

class UsuarioDAOMySQL implements UsuarioDAO {
    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    public function add(Usuario $u)
    {
        
    }
    public function findAll()
    {
        $array = [];

        //pega todos os usuarios do banco de dados
        $sql = $this->pdo->query("SELECT * FROM usuarios");
        if ($sql->rowCount()>0) {
            $data = $sql->fetchAll();


        //transforma em objetos do tipo Usuario
            foreach ($data as $item) {
                $u = new Usuario();
                $u->setId($item['id']);
                $u->setNome($item['nome']);
                $u->setEmail($item['email']);

                $array[] = $u;
            }
        }

        return $array;
    }
    public function findById($id)
    {
        
    }
    public function update(Usuario $u)
    {
        
    }
    public function delete($id)
    {
        
    }

    
}