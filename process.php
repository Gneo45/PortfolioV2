<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['nom'];
       $Email = $_POST['email'];
       $Subject = "contact du portofolio";
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Msg))
       {
           header('location:index.php');
       }
       else
       {
           $to = "contact@gregoryneault.fr";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:index.php");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>