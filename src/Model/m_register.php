<?php
require_once ('../../vendor/autoload.php');

use Dotenv\Dotenv;
//use PDO;

class Model
{
  private PDO $bdd;

  public function __construct()
  {
    try {
      // Charger le fichier .env
      $dotenv = Dotenv::createImmutable(__DIR__);
      $dotenv->load();

      // Récupérer les variables d'environnement
      $host = $_ENV['DB_HOST'];
      $port = $_ENV['DB_PORT'];
      $dbname = $_ENV['DB_NAME'];
      $user = $_ENV['DB_USER'];
      $pass = $_ENV['DB_PASS'];
      $charset = $_ENV['DB_CHARSET'];

      // DSN pour la connexion PDO
      $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";

      // Créer une instance PDO
      $this->bdd = new PDO($dsn, $user, $pass);
      $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
      echo ("Erreur de connexion : " . $e->getMessage());
    }
  }

  public function createUser(){
    
  }
}
