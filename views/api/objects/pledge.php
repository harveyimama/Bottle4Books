<?php

class Pledge {

     
    private $conn;
    private $ws;
    
    //test
    
    
    public function __construct(){
     
        $this->ws = new WebService();
    }
    
    function getPledge($id)
    {
        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/getPledge?id=".$id,"GET","");
        
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
    
    
    function addPledge($projectId,$bottles,$amt,$adminId,$pledgeTypeId)
    {
        $this->conn = $this->ws->getConnectionForm( $this->ws->fetsurl."/RegisterPledge","POST","projectId=".$projectId."&bottles=".$bottles."&amt=".$amt."&adminId=".$adminId."&pledgeTypeId=".$pledgeTypeId);
       
        $response = curl_exec($this->conn);
        $err = curl_error($this->conn);
        curl_close( $this->conn);
        
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
            
        }
    }
    
    

}

?>
