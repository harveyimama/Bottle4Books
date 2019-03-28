<?php
require_once("../views/api/config/WebService.php");
require_once ('../views/api/objects/pledge.php');
require_once ('../views/api/objects/project.php');
session_start();
if(isset($_POST['pledgeType']) && isset( $_POST['id']) && isset($_SESSION["id"]) && isset($_POST["bottles"]))
{
 
    $Pledge = new Pledge();
    $Project = new Project();
    $amt = $Project->getEstimatedAmount($_POST["bottles"]);
    
    
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