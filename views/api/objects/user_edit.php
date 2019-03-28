<?php
include("api/config/WebService.php");
class User{
 
    // database connection and table name
    private $conn;
    private $service_name = "login";
    private $ws;
   
    //test
  
    
    //live
   // private $url = "http://testpay1.fetswallet.com/bfbServer/rest";
    // object properties
    public $id;
    public $username;
    public $password;
    public $created;
 
    // constructor with $db as database connection
    public function __construct(){
        $this->ws = new WebService();
    }
    // signup user
    function signup(){
    
        if($this->isAlreadyExist()){
            return false;
        }
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    username=:username, password=:password, created=:created";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->username=htmlspecialchars(strip_tags($this->username));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->created=htmlspecialchars(strip_tags($this->created));
    
        // bind values
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":created", $this->created);
    
        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
    
        return false;
        
    }
    // login user
    function login(){

        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/login","POST",
    "username=".$this->username."&password=".$this->password);
    
        $response = curl_exec($this->conn);
        $err = curl_error($this->conn);        
        curl_close( $this->conn);
        
        if ($err) {
            $_GET['message'] = "cURL Error #:" . $err;
          return null;
        } else {
        return $response;
           
        }
        
    }
    
    function getuser($id){
        
        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/getUser?id=".$id,"GET",""
           );
        
        $response = curl_exec($this->conn);
        $err = curl_error($this->conn);
        curl_close( $this->conn);
        
        if ($err) {
            $_GET['message'] = "cURL Error #:" . $err;
            return null;
        } else {
            return $response;
            
        }
        
    }
    
    function isAlreadyExist(){
        $query = "SELECT *
            FROM
                " . $this->table_name . " 
            WHERE
                username='".$this->username."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }
}