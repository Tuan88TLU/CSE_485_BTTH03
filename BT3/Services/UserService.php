<?php
include("configs/DBConnection.php");
include("Models/User.php");

class UserService{
    public static function getAll() {

        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql ="SELECT * FROM users";
        $stmt = $conn->query($sql);

        $users=[];
        while($row = $stmt->fetch()){
          $user = new User($row['id'], $row['name'], $row['email'],$row['password']);
          array_push($users,$user);
        }
        return $users;
    }
    
    
    public static function getById($id) {
      // Retrieve the user with the given ID from the database
      $select ="SELECT * FROM users WHERE id = $id";
      $result = $conn->query($select);
      $row=$result->fetch();

    }
  
    
  
    public function delete($id) {
      // Delete the user from the database
      $delete ="DELETE FROM users WHERE id = $id";
      $result = $conn->query($delete);
    }
}
