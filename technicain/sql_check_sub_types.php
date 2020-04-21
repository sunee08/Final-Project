<?php 
    include ("../db/connect.php");

    // //Test
    // $db = "tb_major";
    // $name = "คณะอิสลามศึกษาและนิติศาสตร์";
    $db = $_POST['db'];
    $name = $_POST['name'];

    if($db == "typestech"){

        $sql = "SELECT * FROM typestech"; 
        $dbquery=mysql_query("set names utf-8");
        $query=mysql_query($sql);
        // $data[]=mysql_fetch_assoc($query);
        $rows=mysql_num_rows($query);

        while($res = mysql_fetch_assoc($query)) {
            $data[] = $res;
        }
        echo json_encode($data);

    }

        // $faculty = "2";

    

    
?>