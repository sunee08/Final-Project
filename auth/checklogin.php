<?php
session_start();
require '../connect/connection.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_admin = "SELECT id_admin, fullname FROM admin WHERE username = '$username' AND password = '$password' AND id_admin != '0'";

    if ($result_admin = $db->query($sql_admin)) {
        if ($result_admin->num_rows > 0) {
            while ($row = $result_admin->fetch_object()) {
                $_SESSION['id'] = $row->id_admin;
                $_SESSION['name'] = $row->fullname;
                $_SESSION['rank'] = "admin";
            }
            $result_admin->free();
            header("Location: ../admin/index.php");
        } else {

            $sql = "SELECT id_teacher, fullname, status FROM teacher WHERE username = '$username' AND password = '$password' AND id_admin != '0'";
            if ($result = $db->query($sql)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_object()) {

                        $_SESSION['id'] = $row->id_teacher;
                        $_SESSION['name'] = $row->fullname;
                        $_SESSION['rank'] = $row->status;
                    }

                    $result->free();

                    if ($_SESSION['rank'] == "teacher") {
                        header("Location: ../teacher/index.php");
                        exit();
                    } 
                } else {
                    header("Location: login.php?error=1");
                }

            }
        }
        $db->close();
    } else {
        echo $db->error;
        $db->close();
    }
} else {
    header("Location: ../index.php");
}
