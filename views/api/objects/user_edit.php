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
    
    function addbeneficiary($username,$password,$adminId,$picture,$dob,$address,$genderId,$fullname){
        
        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/RegisterBeneficiary","POST"
            ,"username=$username&password=$password&adminId=$adminId&roleId=2&picture=$picture&email=$username&dob=$dob&address=$address&genderId=$genderId&fullname=$fullname"
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
    
    
    function adduser($email,$password,$adminId,$picture,$fullname){
        
        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/RegisterUser","POST"
            ,"username=$email&password=$password&adminId=$adminId&roleId=3&picture=$picture&email=$email&fullname=$fullname"
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
    
    
}