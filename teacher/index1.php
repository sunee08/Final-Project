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
                $message = "CSV Data Imported into the Database";
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
    }
}
?>




<!DOCTYPE html>
<html>

<head>
<script src="jquery-3.2.1.min.js"></script>

<style>
body {
    font-family: Arial;
    width: 550px;
}

.outer-scontainer {
    background: #F0F0F0;
    border: #e0dfdf 1px solid;
    padding: 20px;
    border-radius: 2px;
}

.input-row {
    margin-top: 0px;
    margin-bottom: 20px;
}

.btn-submit {
    background: #333;
    border: #1d1d1d 1px solid;
    color: #f0f0f0;
    font-size: 0.9em;
    width: 100px;
    border-radius: 2px;
    cursor: pointer;
}

.outer-scontainer table {
    border-collapse: collapse;
    width: 100%;
}

.outer-scontainer th {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
}

.outer-scontainer td {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
}

#response {
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 2px;
    display: none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}

div#response.display-block {
    display: block;
}
</style>
<script type="text/javascript">
$(document).ready(function() {
    $("#frmCSVImport").on("submit", function () {

	    $("#response").attr("class", "");
        $("#response").html("");
        var fileType = ".csv";
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
        if (!regex.test($("#file").val().toLowerCase())) {
        	    $("#response").addClass("error");
        	    $("#response").addClass("display-block");
            $("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");
            return false;
        }
        return true;
    });
});
</script>
</head>

<body>
    <h2>Import CSV file into Mysql using PHP</h2>

    <div id="response"
        class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>">
        <?php if(!empty($message)) { echo $message; } ?>
        </div>
    <div class="outer-scontainer">
        <div class="row">

            <form class="form-horizontal" action="" method="post"
                name="frmCSVImport" id="frmCSVImport"
                enctype="multipart/form-data">
                <div class="input-row">
                    <label class="col-md-4 control-label">Choose CSV
                        File</label> <input type="file" name="file"
                        id="file" accept=".csv">
                    <button type="submit" id="submit" name="import"
                        class="btn-submit">Import</button>
                    <br />

                </div>

            </form>

        </div>
             

</body>

</html>