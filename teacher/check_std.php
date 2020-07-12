<?php
use Phppot\DataSource;

require 'DataSource.php';
$db = new DataSource();
$conn = $db->getConnection();

if (isset($_POST["import"])) {
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            

           
           $id_card = "";
            if (isset($column[0])) {
                $id_card = mysqli_real_escape_string($conn, $column[0]);
            }


            $id_std_card = "";
            if (isset($column[1])) {
                $id_std_card = mysqli_real_escape_string($conn, $column[1]);
            }

          
            $class_room = "";
            if (isset($column[2])) {
                $class_room = mysqli_real_escape_string($conn, $column[2]);
            }
            $fullname = "";
            if (isset($column[3])) {
                $fullname = mysqli_real_escape_string($conn, $column[3]);
            }
            $birthday = "";
            if (isset($column[4])) {
                $birthday = mysqli_real_escape_string($conn, $column[4]);
            }
            $status = "";
            if (isset($column[5])) {
                $status = mysqli_real_escape_string($conn, $column[5]);
            }
            $types = "";
            if (isset($column[6])) {
                $types = mysqli_real_escape_string($conn, $column[6]);
            }
            $address = "";
            if (isset($column[7])) {
                $address = mysqli_real_escape_string($conn, $column[7]);
            }
            $parents = "";
            if (isset($column[8])) {
                $parents = mysqli_real_escape_string($conn, $column[8]);
            }
            $tel = "";
            if (isset($column[9])) {
                $tel = mysqli_real_escape_string($conn, $column[9]);
            }
            $teacher = "";
            if (isset($column[10])) {
                $teacher = mysqli_real_escape_string($conn, $column[10]);
            }
            
            
            $sqlInsert = "INSERT into student(id_card,id_std_card,class_room,fullname,birthday,status,types,address,parents,tel,teacher)
                   values (?,?,?,?,?,?,?,?,?,?,?)";
            $paramType = "issssssssss";
            $paramArray = array(
             
             
                $id_card,  
                $id_std_card,
                $class_room,
                $fullname,
                $birthday,
                $status,
                $types,
                $address,
                $parents,
                $tel,
                $teacher
        
            );


            $insertId = $db->insert($sqlInsert, $paramType, $paramArray);
            
            if (! empty($insertId)) {
                $type = "success";
        
           echo "<script>alert('สำเร็จ')</script>";
           echo "<script>window.open('add_student.php','_self')</script>";

            } else {
                $type = "error";
                  echo "<script>alert('ไม่สำเร็จ โปรดลองอีกครั้ง')</script>";
           echo "<script>window.open('add_student.php','_self')</script>";
            }
        }
    }
}
?>