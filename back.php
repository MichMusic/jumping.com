<?php
        $name = $_POST['field1'];
        $email = $_POST['field2'];
        $message = $_POST['field3'];

        if(trim($name) == "" || trim($email) == "" || trim($message) == "") {
                //echo "Вы не ввели какие-то поля";
                $errormes = "Вы не ввели какие-то поля!";
                echo '<h1>'.$errormes.'</h1>';
        } else {
                $field_flag = $_POST['field7'];
                if($field_flag == "on") {
                        $dbc = mysqli_connect('localhost', 'krivcov', 'qwerty123!h');
                        $dbc->query('use `BackingForms`');

                        try {
                                $dbc->query("INSERT INTO questionclient(`email`, `name`, `message`) VALUES 
                                        ('$email','$name','$message ')");
                                $dbc->close();

                                echo '<script>window.location.href = "message.html";</script>';
                        } catch(Exception $ex) {
                                echo "$ex";
                        }
                } else {
                        echo '<script>window.location.href = "errorpage.html";</script>';
                }
        }
?>