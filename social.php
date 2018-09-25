<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//$db = new Sqlite3("andmed.db");

interface Social{
  public function Add($id, $data);  // article id what do we want to add
  public function Get($id); // article id what do we want to get
}

class Likes implements Social{
  private $db;
  function __construct(int $firstRun){ // tekitame esimest korda, paneme muutujad
    $this->db = new Sqlite3("andmed.db");
    if ($firstRun){
      $statement = $this->db->prepare(
        "create table Likes(
          articleID int,
          currentLikes int
        );"
      );
      $statement->execute();
      $statement = $this->db->prepare("insert into Likes (articleID, currentLikes) values
      (0,1),
      (1,3),
      (2,5),
      (3,8);");
      $statement->execute();
    }
  }
  function Add($id, $data){
    $currentResult = $this->Get($id);
    if ($currentResult == false){
      echo("false");
      $statement = $this->db->prepare("insert into Likes (articleID, currentLikes) values (:id,1)");
      $statement->bindvalue(":id",$id);
      $result = $statement->execute();
      return $result;
    }else {
      $statement = $this->db->prepare("update Likes set currentLikes = :data where articleID = :id;");
      $statement->bindvalue(":data", $data);
      $statement->bindvalue(":id",$id);
      $result = $statement->execute();
      return $result;
    }

  }

  function addOne($id){ // võtab andmed ja lisab +1 juurde
    $currentResult = $this->Get($id);
    if ($currentResult == false){
      echo("false");
      $statement = $this->db->prepare("insert into Likes (articleID, currentLikes) values (:id,1)");
      $statement->bindvalue(":id",$id);
      $result = $statement->execute();
      return $result;
    }else {
      $currentLikes = $currentResult["currentLikes"];
      $newLikes = $currentLikes + 1;
      $statement = $this->db->prepare("update Likes set currentLikes = :newLikes where articleID = :id;");
      $statement->bindvalue(":newLikes", $newLikes);
      $statement->bindvalue(":id",$id);
      $result = $statement->execute();
      return $result;
    }
  }

  function Get($id){
    $statement = $this->db->prepare("select currentLikes from Likes where articleId = :id;");
    $statement->bindvalue(":id",$id);
    $result = $statement->execute();
    $result = $result->fetchArray();
    return $result;
  }
  function renderHandler($id){
    $html = "<br>Current likes: ". $this->Get($id)["currentLikes"];
    $html .= "<br><button type='button' class='btn btn-info' href= 'social.php?addTo=$id'> <span class='glyphicon glyphicon-thumbs-up' aria-hidden='true'></span> Like </button>";
    return $html;
  }
}




$likes = new Likes(0);
if (isset($_GET["addTo"])){
  $likes->addOne($_GET["addTo"]);
  header("Location: index.php");
}
/*$result = $likes->renderHandler(1);
echo($result);
/*$likes = new Likes(0);
$result = $likes->addOne(4);
echo("<br><br><br>");
var_dump($result);

var_dump($likes->Get(4));*/


?>
