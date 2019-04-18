
<?php
if(isset($_GET['message']))
{
    if( $_GET['message'] == "1")
    {
        echo "<script>alert('Logout succesful');</script>";   
    }
    else{
        echo "<script>console.log('".$_GET['message'] ."');</script>"; 
        echo "<script>alert('".$_GET['message'] ."');</script>"; 
    }
  
}
?>
