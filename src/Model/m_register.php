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

  public function getTweet(){
    $sqlQuery = "SELECT Posts.*, Users.display_name FROM Posts JOIN Users ON Posts.user_id = Users.user_id ORDER BY created_at DESC";
    $statement = $this->bdd->prepare($sqlQuery);
    $statement->execute();
    $req = $statement->fetchAll();
    return $req;
  }

  public function createPost($userId, $content) {
      $sql = "INSERT INTO Posts (user_id, content) 
              VALUES (:user_id, :content)";
      $stmt = $this->bdd->prepare($sql);
      $stmt->execute([
        'user_id'=>$userId,
        'content'=>$content
      ]);
  }

  public function getInfoFromUser($user){
    $sqlQuery ="SELECT * FROM Users WHERE user_id = :id";
    $statement = $this->bdd->prepare($sqlQuery);
    $statement->bindParam(':id', $user, PDO::PARAM_INT);
    $statement->execute();
    $req = $statement->fetch();
    return $req;
  }

  public function updateAccount($displayName, $bio, $userId) {
    $sqlQuery = "UPDATE Users SET display_name = :display_name, bio = :bio WHERE user_id = :id";
    $statement = $this->bdd->prepare($sqlQuery);
    $statement->execute([
        'display_name' => $displayName,
        'bio' => $bio,
        'id' => $userId
    ]);
  }

  public function followUser($followerId, $followingId) {
    $sqlQuery = "INSERT INTO Follows (follower_id, following_id) 
                VALUES (:follower_id, :following_id)";
    $statement = $this->bdd->prepare($sqlQuery);
    $statement->execute([
        'follower_id' => $followerId,
        'following_id' => $followingId
    ]);
  }

  // Récupérer les personnes que je suis
  public function getFollowing($userId) {
    $sqlQuery = "SELECT u.user_id, u.display_name
              FROM Follows f
              JOIN Users u ON f.following_id = u.user_id
              WHERE f.follower_id = :user_id";
    $statement = $this->bdd->prepare($sqlQuery);
    $statement->execute(['user_id' => $userId]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
  // Récupérer les personnes qui me suivent
  public function getFollowers($userId) {
    $sqlQuery = "SELECT u.user_id, u.display_name
              FROM Follows f
              JOIN Users u ON f.follower_id = u.user_id
              WHERE f.following_id = :user_id";
    $statement = $this->bdd->prepare($sqlQuery);
    $statement->execute(['user_id' => $userId]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
}