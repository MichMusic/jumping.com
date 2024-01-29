<?php
$NameClient=$_POST['client_name'];
$Email=$_POST['client_email'];
$Client_Reviews_Message=$_POST['reviews'];      

        if(trim($NameClient) == "")
                echo "Вы не ввели имя";

        else if(trim($Email) == "" || trim($Client_Reviews_Message) == "") 
        {
                echo "Вы не ввели все данные";
        }

       $connection = mysqli_connect('127.0.0.1','marina', 'tf##.,coDdl');
       $connection->query('use `marina`');
        try {
                $connection->query("INSERT INTO Reviews(`NameUser`, `Email`, `Message`) VALUES 
                        ('$NameClient','$Email','$Client_Reviews_Message')");
                $connection->close();
                include 'some.php';
        } catch(Exception $ex) {
                echo "$ex";
        }
?>