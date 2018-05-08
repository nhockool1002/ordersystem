<div class="container-fluid" style="margin-top:35px">
    <div class="col-sm-12 box-huongdan">
    <em>Hướng dẫn</em>
    <p> Bước 1: Nhập tên nguồn đến vào ô nhập nguồn đến</p>
    <p> Bước 2: Nhấn vào nút kiểm tra để xác định nguồn đến vừa nhập đã có hay chưa </p>
    <p> Bước 3: Nếu dữ liệu trùng hoặc có thể trùng sẽ không thể THÊM NGUỒN ĐẾN, hãy thử tên khác</p>
    <p> Bước 4: Tên hợp lệ (Sau khi kiểm tra) , nút THÊM NGUỒN ĐẾN sẽ hiển thị, khi đó tiến hành nhấn vào nút để thêm</p>
    </div>
    <div class="col-sm-12 box-alert">
    </div>
    <div class="col-sm-12">
    <div class="row">
    <div class="col-sm-6">
    <?php
    $obj = new Db();
    $sql = "SELECT * FROM nguonden ORDER BY id DESC";
    $rows = $obj->select($sql);
    ?>
    <table id="table_id" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên nguồn đến</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($rows as $row){ ?>
        <tr>
            <td style="width:10%;"><?php echo $row['id']; ?></td>
            <td><?php echo $row['tennguonden']; ?></td>
            <td style="width:15%;text-align:center;"><span><a style="color:red;font-size:18px;" onclick="return confirm('Có chắc chắn xóa chứ ?')" class="delete-nguonden" data-id="<?php echo $row['id']; ?>"><i class="fa fa-times"></a></span></i></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
    </div>
    <div class="col-sm-6">
    <form>
    <label>Tên Nguồn Đến</label>
    <input class="form-control tennguonden" type="text" />
    <br>
    <div class="state-check-nguonden">
    <span>Trạng thái</span> : <span class="state-message-nguonden"><span class="orange-message"> Chưa thực hiện kiểm tra nguồn đến</span></span>
    </div>
    <br>
    <div class="button-zone-addnguonden">
    <button class="btn btn-warning kiemtra-addnguonden">Kiểm tra</button>&nbsp<button class="btn btn-primary submit-addnguonden" disabled>Thêm nguồn đến</button>
    </div>
    </form>
    </div>
    </div></div>
</div>