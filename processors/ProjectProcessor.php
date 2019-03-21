<?php

require ('api/objects/project.php');


   
    if (isset($_GET['task'])) {
        
        if($_GET['task'] == "featured")
        {
 
        $Projects = new Project();       
        $ret = $Projects->getfeaturedprojects();

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
            header('location:'.$_POST['callback']);
           }
            else {
               echo] "<script>alert('".$json["message"]."')</script>";
            }
        }
        }
    }
   
   

    
//session_destroy();
}
?>
