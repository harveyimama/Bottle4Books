
<?php
if(isset($_GET['message']))
{
    if( $_GET['message'] == "1")
    {
        echo "<script>alert('Logout succesful');</script>";   
    }
    else{
        echo "<script>alert('".$_GET['message'] ."');</script>"; 
    }
  
}
?>
