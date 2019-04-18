<?php
session_start();
require_once("../views/api/config/WebService.php");
require_once ('../views/api/objects/user_edit.php');
require_once ('../views/api/objects/project.php');
    

if(isset($_POST['reg']) )
{
 
    $User = new User();  
   
    $password =  generateRandomString();
    
    if(isset($_FILES['photo']['name'])){
        $file = rand(0, 10000000).$_FILES['photo']['name'];
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $file)) {
            if($fp = fopen($file,"rb", 0))
            {
                $picture = fread($fp,filesize($file));
                fclose($fp);
                // base64 encode the binary data, then break it
                // into chunks according to RFC 2045 semantics
                $base64 = base64_encode($picture);
              //  $tag = '<img src="data:image/jpg;base64,'.$base64.'" alt="" />';
                $css = 'url(data:image/jpg;base64,'.str_replace("\n", "", $base64).'); ';
            }
        }
    }
    
    
    $return =  $User->addbeneficiary(preg_replace('/\s+/', ' ', $_POST['beneficiary_name']), 
        $password, $_SESSION['id'],rawurlencode("data:image/jpeg;base64,$base64"), $_POST['beneficiary_dob'], $_POST['beneficiary_address'], 
        $_POST[ "beneficiary_gender"], $_POST['beneficiary_name']);
    
    $return2 = $return;
   
    $json = json_decode($return,true);
    
    if ($json==null || $json == "")  
        header('location:../views/index.php?message='. $json['message']);
   else
   {
       
       if($json['success'])
       {
           $Project = new Project();
           $bottlesLu =   json_decode($Project->getEstimatedCount($_POST['project_cost']),true);
           
           $return =  $Project->addproject($_POST['project_title'], $_POST['project_desc'], $_POST['project_duedate'],
               $_POST['project_cost'], $_SESSION['id'], $bottlesLu['other'], $json['other'],$_POST['project_type']);
           
           $json = json_decode($return,true);
           
           if ($json==null || $json == "")
               header('location:../views/index.php?message='.$json['message']);
            else
            {
                if($json['success'])
                {
                    
                $msg  = "User Registered Successfully. Thank You";
                header('location:../views/index.php?message='.$msg);
                }
                else
                    header('location:../views/index.php?message='.$json['message']);
            }
            
       }
       else 
       header('location:../views/index.php?message='.$json['message']);
   }
    
        
}
else if (isset($_POST['reg_user']))
{
    
    $User = new User();

    $return =  $User->adduser( $_POST['email'], $_POST['password'],0,null, $_POST['fullname']
       );
    
    $json = json_decode($return,true);
    
    if ($json==null || $json == "")
        header('location:../views/index.php?message='.$return);
        else
        {
            if($json['success'])
            {
                
                $msg  = "User Registered Successfully. Thank You";
                header('location:../views/index.php?message='.$msg);
            }
            else
                header('location:../views/index.php?message='.$json['message']);
          }
        
}
    else{
        $msg  = "Missing Parameter";
        header('location:../views/index.php?message='.$msg);
    }
    
    
    
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
  

?>
view