<?php
include("api/config/WebService.php");
class Project {

     
    private $conn;
    private $ws;
    
    //test
    
    
    public function __construct(){
        $this->ws = new WebService();
    }
    
    function getallprojects()
    {
        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/getAllProjects","GET");
        
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
    
    
    function getfeaturedprojects()
    {
        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/getFeaturedProjects","GET");
        
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
    
    
    function getEstimatedAmount($amount)
    {
        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/getAmountEstimate","GET","count=".$amount);
        
        $response = curl_exec($this->conn);
        $err = curl_error($this->conn);
        curl_close( $this->conn);
        
        if ($err) {
            $_GET['message'] = "cURL Error #:" . $err;
            return null;
        } else {
            return $_GET['message'];
            
        }
    }
    

}

?>
