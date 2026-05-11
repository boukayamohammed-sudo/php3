<?php

class Article {

    private $host = "localhost";
    private $db_name = "blogdb";
    private $username = "root";
    private $password = "";

    public $conn;

    public function __construct() {

        try {

            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8",
                $this->username,
                $this->password
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {

            echo "Erreur : " . $e->getMessage();
        }
    }

    public function read() {

        $sql = "SELECT * FROM articles";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($titre, $contenu, $auteur) {

        $sql = "INSERT INTO articles (titre, contenu, auteur)
                VALUES (:titre, :contenu, :auteur)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            'titre' => $titre,
            'contenu' => $contenu,
            'auteur' => $auteur
        ]);
    }
}

?>