<?php

class PostEntity extends Entity
{

    protected string $table = 'post';

    public function findAll(): array
    {
        $query = 'SELECT id, date, title, LEFT(content, 100) as content, user FROM post';
        $query = $this->_dbh->query($query);
        $query->execute();

        $var = $this->table . 's';
        $$var = $query->fetchAll();

        $this->_closeConnexion($query);

        return $$var;
    }

    public function findOneById(int $id): array
    {
        $query = "SELECT * FROM $this->table WHERE id = :id ORDER BY date DESC";
        $params[] = ['id', $id, PDO::PARAM_INT];

        $query = $this->_prepareQuery($query, $params);
        $query->execute();

        $var = $this->table;
        $$var = $query->fetch();

        $this->_closeConnexion($query);

        return $$var;
    }
}
