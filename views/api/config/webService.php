<?php

class WebService{
 

    public $conn;
    
    
    //live
   //public $fetsurl = "http://testpay1.fetswallet.com/bfbServer/rest";
    //test
      public $fetsurl = "http://172.21.7.57:8080/bfbServer/rest";

   
   
    // get the database connection
    public function getConnectionForm($url,$type,$input){
 
        $this->conn = null;
 
        try{
           
            $curl = curl_init();

            curl_setopt_array($curl, array(
               CURLOPT_URL => $url,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => $type,
              CURLOPT_POSTFIELDS => $input,
              CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencode",
                "cache-control: no-cache"
              ),
            
              
            ));
           
            
            $this->conn = $curl;
                       

        }catch(Exception $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>