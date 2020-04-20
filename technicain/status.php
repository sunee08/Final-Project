          <div class="modal fade" id="status" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">
                         <form method="post" enctype="multipart/form-data" action="check_status.php">
                         <div class="modal-dialog">
                         <div class="modal-content">
                         <div class="modal-header">
                         <h4 class="modal-title" id="myModalLabel">ตรวจสอบสถานะ / เปลียนสถานะ</h4>
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                         </div>
                         <div class="modal-body">
                         <div class="form-group">
                         <label for="card_code">รหัสการส่งซ่อม/เคลม</label>
                         <input type="text" name="cusID" id="cusID" class="form-control" readonly
                         value="<?php echo $objResult["cusName"];?>" class="form-control">
                         <div>
                         &nbsp;
                         <div class="form-group">
                         <div class="col-md-20">
                         <div class="name">เช็คสถานะ</div><br>
                         <span>
                         <div class="value">
                         <div class="input-group">
                         <br>
                         <select name="status" id="status" class="form-control" onChange="getTeam(this.value);">
                         <option value=""><?php echo $objResult["status"];?></option>
                         <option value="รอการยืนยัน" >รอการยืนยัน</option>
                         <option value="กำลังดำเนินการ">กำลังดำเนินการ</option>
                         <option value="ซ่อมเสร็จ">ซ่อม/เคลม เสร็จ</option>
                         <option value="ยกเลิก">ยกเลิกการซ่อม</option>
                         </select>
                         </span>
                         </div>
                         </div>
                         </div>
                         <br>
                         <div class="form-group">
                         <div class="col-md-20">
                         <label for="">หมายเหตุ</label>
                         <textarea name="descrip" id="descrip" class="form-control" ></textarea>
                         <div class="modal-footer">
                         <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> บันทึก</button>
                         <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>ยกเลิก</button>
                         </form>