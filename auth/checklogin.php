<?php
session_start();
require '../connect/connection.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_admin = "SELECT id_teacher, fullname, status FROM teacher WHERE username = '$username' AND password = '$password' ";

    if ($result_admin = $db->query($sql_admin)) {
        if ($result_admin->num_rows > 0) {
            while ($row = $result_admin->fetch_object()) {

                       $_SESSION['id'] = $row->id_teacher;
                        $_SESSION['name'] = $row->fullname;
                        $_SESSION['rank'] = $row->status;
            }
            $result_admin->free();
 header("Location: ../teacher/index.php");      
                } else {
                    header("Location: login.php?error=1");
                }

            }
        }
        $db->close();

        echo $db->error;
        $db->close();
    
