<?php
session_start();
require 'connect/db.php';

if(isset($_POST['username']) && isset($_POST['password'])){


    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_cus = "SELECT id_teacher, fullname FROM teacher WHERE username = '$username' AND password = '$password' AND activate != '0' ";



    if($result_cus = $con->query($sql_cus)){
        if($result_cus->num_rows > 0){
            while($row = $result_cus->fetch_object()){
                $_SESSION['id'] = $row->id_teacher;
                $_SESSION['name'] = $row->fullname;
                $_SESSION['status'] = "ครูฝ่ายปกครอง";    
                    }
                $result_cus->free();
 header("Location: teacher/index.php");      
    
                }


                

                    else{ 
                        header("Location: index.php?error=1");
                    
                    
                    }
                    $con->close();
                    }else{
                    echo $con->error;
                    $con->close();
                    }
                    }else{
                    header("Location: ../index.php");
                    }
        
        ?>