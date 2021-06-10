<?php

abstract class Entity
{

    protected PDO $_dbh;
    private string $table;

    public function __construct()
    {
        $connexion = new Connexion('simplon_blog');
        $this->_dbh = $connexion->getConnection();
    }

    protected function _closeConnexion(PDOStatement $query)
    {
        $query->closeCursor();
        $this->query = '';
        unset($this->_dbh);
    }

    public function findAll(): array
    {
        $query = "SELECT * from $this->table";
        $query = $this->_dbh->query($query);
        $query->execute();
        $results = $query->fetchAll();

        $this->_closeConnexion($query);

        return $results;
    }

    public function findOneById(int $id): array
    {
        $query = "SELECT * FROM $this->table WHERE id = :id";
        $params[] = ['id', $id, PDO::PARAM_INT];

        $query = $this->_prepareQuery($query, $params);
        $query->execute();
        $result = $query->fetch();

        $this->_closeConnexion($query);

        return $result;
    }

    protected function _prepareQuery(string $query, array $params)
    {
        $query = $this->_dbh->prepare($query);
        foreach ($params as $param) {
            $key = ':' . $param[0];
            $query->bindParam($key, $param[1], $param[2]);
        }
        $query->execute();
        
        return $query;
    }
}
