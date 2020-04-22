


                  <?php
                      include('../db/connect.php');

$strSQL = "SELECT * FROM report_tech  WHERE id_re='" . $_GET['id'] . "'";

                 

if ($objQuery = mysql_query($strSQL)) {
    while ($objResult = mysql_fetch_array($objQuery)) {
        ?>

                        <div id="wrapper">
                        <div id="content-wrapper">
                        <div class="container-fluid">
                        <div class="card mb-3">
                        <div class="card-header">
                        <i class="fas fa-table"></i> &nbsp; ข้อมูลของฉัน </div>
                        <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr style="font-weight:bold; color:#41403E; text-align:center; background:#F3F2EE;">
                        <th>
                        <div align="center">ลำดับ</div>
                        </th>
                        <th>
                        <div align="center">วันที่ส่งงาน</div>
                        </th>
                        <th>
                        <div align="center">รายละเอียดการซ่อม</div>
                        </th>
                        <th>
                        <div align="center">ราคาทั้งหมด</div>
                        </th>
                        <th>
                        <div align="center">สถานะ<div>
                        </th>
                        </tr>
                        </thead>
                     
                        </thead>
                        </div>
                        <tr>
                        <td><div align="center"><?php echo $objResult["id_re"];?></td>
                        <td align="center"><?php echo $objResult["date_re"];?></td>
                        <td align="center"><?php echo $objResult["detail_re"];?></td>
                        <td align="center"><?php echo $objResult["price_re"];?></td>
                        <td align="center"><?php echo $objResult["status"];?></td>
                        </td>
                        </div>
                        </div>
                        </div>
                        </td>
                        </tr>
                      
                      </tbody>
                      </table>
                      </td>
                      </div>
                      </div>
                      </div>
               <?php
}
}

?>