<?php
//include("api/config/WebService.php");
class Project {

     
    private $conn;
    private $ws;
    
    //test
    
    
    public function __construct(){
     
        $this->ws = new WebService();
    }
    
    function getallprojects($age,$cat,$amt,$page)
    {
        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/getAllProjects","GET","age=".$age."&cat=".$cat."&amt=".$amt."&page=".$page);
        
        $response = curl_exec($this->conn);
        $err = curl_error($this->conn);
        curl_close( $this->conn);
        
        if ($err) {
            $_SESSION['message'] = "cURL Error #:" . $err;
            return null;
        } else {
            return $response;
            
        }
    }
    
    function getallAges($age,$cat,$amt,$page)
    {
        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/getAllAges","GET","age=".$age."&cat=".$cat."&amt=".$amt."&page=".$page);
        
        $response = curl_exec($this->conn);
        $err = curl_error($this->conn);
        curl_close( $this->conn);
        
        if ($err) {
            $_SESSION['message'] = "cURL Error #:" . $err;
            return null;
        } else {
            return $response;
            
        }
    }
    
    
    function getallCats($age,$cat,$amt,$page)
    {
        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/getAllCats","GET","age=".$age."&cat=".$cat."&amt=".$amt."&page=".$page);
        
        $response = curl_exec($this->conn);
        $err = curl_error($this->conn);
        curl_close( $this->conn);
        
        if ($err) {
            $_SESSION['message'] = "cURL Error #:" . $err;
            return null;
        } else {
            return $response;
            
        }
    }
    
    
    function getallAmts($age,$cat,$amt,$page)
    {
        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/getAllAmts","GET","age=".$age."&cat=".$cat."&amt=".$amt."&page=".$page);
        
        $response = curl_exec($this->conn);
        $err = curl_error($this->conn);
        curl_close( $this->conn);
        
        if ($err) {
            $_SESSION['message'] = "cURL Error #:" . $err;
            return null;
        } else {
            return $response;
            
        }
    }
    
    
    
    function getfeaturedprojects()
    {
        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/getFeaturedProjects","GET","");
        
        $response = curl_exec($this->conn);
        $err = curl_error($this->conn);
        curl_close( $this->conn);
        
        if ($err) {
            $_SESSION['message'] = "cURL Error #:" . $err;
            return null;
        } else {
            return $response;
            
        }
    }
    
    
    function getEstimatedAmount($amount)
    {
        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/getAmountEstimate?count=".$amount,"GET","");
        
        $response = curl_exec($this->conn);
        $err = curl_error($this->conn);
        curl_close( $this->conn);
        
        if ($err) {
            $_SESSION['message'] = "cURL Error #:" . $err;
            return null;
        } else {
            return $response;
            
        }
    }
    
    
    function getEstimatedCount($count)
    {
        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/getBottleEstimate?amount=".$count,"GET","");
        
        $response = curl_exec($this->conn);
        $err = curl_error($this->conn);
        curl_close( $this->conn);
        
        if ($err) {
            $_SESSION['message'] = "cURL Error #:" . $err;
            return null;
        } else {
            return $response;
            
        }
    }
    
    function addproject($name,$desc,$dueDate,$cost,$adminId,$estimatedBottles,$id,$type)
    {
        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/RegisterProject","POST",
            "name=$name&desc=$desc&dueDate=$dueDate&cost=$cost&adminId=$adminId&estimatedBottles=$estimatedBottles&id=$id&type=$type");
        
        $response = curl_exec($this->conn);
        $err = curl_error($this->conn);
        curl_close( $this->conn);
        
        if ($err) {
            $_SESSION['message'] = "cURL Error #:" . $err;
            return null;
        } else {
            return $response;
            
        }
    }
    

}

?>
