
<?php include('h.php');
?>

<form  name="admin" action="add_from_admin_db.php" method="POST" id="admin" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="admin_user" type="text" required class="form-control" id="admin_user" placeholder="ชื่อผู้ใช้" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="admin_pass" type="password" required class="form-control" id="admin_pass" placeholder="รหัสผ่าน" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="admin_name" type="text" required class="form-control" id="admin_name" placeholder="ชื่อ-นามสกุล" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="right">
              <button type="submit" class="btn btn-success btn-sn" id="btn"> <span class="glyphicon glyphicon-saved"></span> บันทึก</button>      
            </div> 
          </div>
        </form>