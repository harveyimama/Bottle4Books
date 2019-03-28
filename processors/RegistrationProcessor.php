<?php
require_once("../views/api/config/WebService.php");
require_once ('../views/api/objects/user_edit.php');

session_start();
if(isset($_POST['password']) && isset( $_POST['fullname']) && isset($_POST["email"]))
{
 
    $Pledge = new User();
       
    
    $return =  $Pledge->addPledge($_POST['id'],$_POST["bottles"],0,$_SESSION["id"],$_POST['pledgeType']);
   
    $json = json_decode($return,true);
    
    if ($json==null || $json == "")  
        header('location:../views/index.php?message='.$return);
   else
   {
       $msg  = "Pledge Received Successfully. Thank You";
       if($json['success'])
           header('location:../views/index.php?message='.$msg);
       else 
       header('location:../views/index.php?message='.$json['message']);
   }
    
        
}
    else{
        $msg  = "Missing Parameter";
        header('location:../views/index.php?message='.$msg);
    }
  

?>
view