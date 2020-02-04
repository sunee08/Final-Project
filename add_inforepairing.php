<?php

include ('menu2.php');

?>






<head>
<title>Insert Repair Invoice</title>
</head>

<body id="page-top">


<div id="wrapper">



     <div id="content-wrapper">

      <div class="container-fluid">

        <!-- DataTables Example -->
   
        <div class="card mb-3">
          <div class="card-header">




<form action="save_addinforepair.php" name="add" method="post">

  <br>
  <table width="400" border="1" style="width: 400px">
    <tbody>
      <tr>
        <td width="125"> &nbsp;Username</td>
        <td width="180">
          <input name="txtName" type="text" id="txtName" size="20">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Equipment</td>
        <td><input name="txtEquipment" type="text" id="txtEquipment">
        </td>
        </tr>
      <tr>
        <td> &nbsp;Damage</td>
        <td><input name="txtDamage" type="text" id="txtDamage">
        </td>
      </tr>
      </tr>
      <tr>
        <td> &nbsp;Status</td>
        <td><input name="txtStatus" type="text" id="txtStatus">
        </td>
      </tr>
      <tr>
        <td>&nbsp;Teachnician</td>
        <td><input name="txtTeachnician" type="text" id="txtTeachnician" size="35"></td>
      </tr>
</td>
      </tr>
      </div></div></div>


    </tbody>
  </table>
  <br>

<input type="submit" name="Submit" value="Save">

</form>

</div></div></div></div>
</body>
