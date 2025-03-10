<?php
require_once __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;
use PDO;

class Model {
    private PDO $bdd;

    public function __construct()
    {
        try {
            // Charger le fichier .env
            $dotenv = Dotenv::createImmutable(__DIR__);
            $dotenv->load();

            // Récupérer les variables d'environnement
            $host = $_ENV['DB_HOST'];
            $dbname = $_ENV['DB_NAME'];
            $user = $_ENV['DB_USER'];
            $pass = $_ENV['DB_PASS'];
            $charset = $_ENV['DB_CHARSET'];

            // DSN pour la connexion PDO
            $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

            // Créer une instance PDO
            $this->bdd = new PDO($dsn, $user, $pass);
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo("Erreur de connexion : " . $e->getMessage());
        }
    }
}
