<?php

class Connexion
{

    private string $db_type;
    private string $db_host;
    private string $db_name;
    private string $user_name;
    private string $user_password;

    private array $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ];

    private PDO $_pdo_connexion;

    public function __construct(string $db_name, string $db_host = 'localhost', string $db_username = 'root',  string $db_password = '', string $db_type = 'mysql', $options = [])
    {
        $this->db_name = $db_name;
        $this->db_type = $db_type;
        $this->db_host = $db_host;
        $this->user_name = $db_username;
        $this->user_password = $db_password;
    }

    public function getConnection()
    {
        try {
            $dns = "$this->db_type:host=$this->db_host;dbname=$this->db_name";
            $this->_pdo_connexion = new PDO($dns, $this->user_name, $this->user_password, $this->options);
            return $this->_pdo_connexion;
        } catch (PDOException $e) {
            print_r("Erreur lors de la connexion (message = $e->getMessage() )<br>");
            die();
        }
    }
}
