<?php

require_once('api/objects/user_edit.php');
$session_time = 50;
if(!isset($_SESSION["id"]))
{
    session_start();
    if (isset($_POST['admlogin'])) {

        $u = $_POST['admname'];
        $pass = $_POST['admpass'];
        $User = new User();
        $User->username = $u;
        $User->password = $pass;
        $ret = $User->login();

        if ($ret != null) {

            $json = json_decode($ret, true);
            
            if($json["responseCode"]==0)
           {             
        
            $_SESSION["json"] = $json;
            $_SESSION["id"] = $json["adminId"]; 
            $_SESSION["name"] = $json["fullname"];
            $_SESSION["role"] = $json["roleId"];
            $_SESSION["picture"] = $json["picture"];
            $_SESSION["timer"] = time();    
           // phpinfo();
     
        
            header('location:'.$_POST['callback']);
           }
            else {
                echo "<script>alert('".$json["message"]."')</script>";
            }
        }
    }
    if (isset($_POST['needsLogin'])) {
        echo "<script>alert('Login Required')</script>";
       
    }
    
    
   
}
else {
    
     if (isset($_GET["task"]))
    {

        if($_GET["task"]=="lo")
        {
         
            session_destroy();
            header('location:index.php?message=1');
       
        }
    }
   //check session timing 
    else  if ((strtotime(time())-strtotime( $_SESSION["timer"]))>$session_time)
    {
       
        session_destroy();
        $_GET['message'] = 'Session Expired,Please log in ';
    }
    else {
        
        $_SESSION["timer"] = time();
       
    }
    
//session_destroy();
}
?>
