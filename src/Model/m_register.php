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
      $dotenv = Dotenv::createImmutable('../../');
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

  public function findUserByEmail($email){
    $sqlQuery = "SELECT user_id, username, password_hash FROM Users WHERE email= :email";
    $statement = $this->bdd->prepare($sqlQuery);
    $statement->execute([
      'email'=>$email
    ]);
    $req = $statement->fetch(PDO::FETCH_ASSOC);
    return $req;
  }

  public function createUser($username, $displayName, $password, $email, $dateOfBirth){
    $sqlQuery = "INSERT INTO Users (username, display_name, password_hash, email, date_of_birth) VALUES (:username, :display_name, :password, :email, :date_of_birth)";
    $statement = $this->bdd->prepare($sqlQuery);
    $statement->execute([
      'username'=>$username,
      'display_name'=>$displayName,
      'password'=>$password,
      'email'=>$email,
      'date_of_birth'=>$dateOfBirth
    ]);
  }
}
