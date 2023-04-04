<?php
include('../../model/db.class.php');
include '../../model/ADMINsanpham.class.php';
include '../../view/ADMINsanphamView.php';
$sanpham = new sanphamview();

?>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" id="insert_product">
        <div class="form-group">
            <label for="anhdt">Anhdt</label><br><br>
            <img src="" alt="Nodata" id="image" width="250px" height="250px"><button type="button" style="margin-left:20px;">ImageChoose</button>
            </br></br>
            <input class="form-control" type="text" name="anhdt" id="anhdt" placeholder="anhdt">
          </div>
          <div class="form-group">
            <label for="id_dt">ID_dienthoai</label>
            <input class="form-control" type="text" name="id_dt" id="id_dt" value='' placeholder="ID_dienthoai">
          </div>
          <div class="form-group">
            <label for="idthuonghieu">ID thương hiệu</label></br>
            <select id="idthuonghieu" name="idthuonghieu">
              <?php
            
              $result = $sanpham->getCartegoryView();
              foreach ($result as $data) {
                $id_th = $data['id_thuonghieu'];
                $tenTH = $data['tenthuonghieu'];
              ?>
                <option value="<?php echo $id_th; ?>"><?php echo $tenTH; ?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="idncc">ID nhà cung cấp</label></br>
            <select id="idncc" name="idncc">
            <?php
              $result = $sanpham->getNhacungcapView();
              foreach ($result as $data) {
                $id_ncc = $data['id_nhacungcap'];
                $tenNcc = $data['tennhacungcap'];
              ?>
                <option value="<?php echo $id_ncc; ?>"><?php echo $tenNcc; ?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="tendt">Tên dt</label>
            <input class="form-control" type="text" name="tendt" id="tendt" placeholder="tendt">
          </div>
          
          <div class="form-group">
            <label for="mota">Mota</label>
            <textarea class="form-control" type="text" name="mota" id="mota" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="gia">Gia</label>
            <input class="form-control" type="text" name="gia" id="gia" placeholder="gia">
          </div>
          <div class="form-group">
            <label for="soluong">soluong</label>
            <input class="form-control" type="text" id="soluong" name="soluong">
          </div>
          <div class="form-group">
            <label for="luotxem">luotxem</label>
            <input class="form-control" type="text" id="luotxem" name="luotxem">
            <div class="form-group">
              <label for="idkm">id km</label></br>
              <select id="idkm" name="idkm">
              <?php
              $result = $sanpham->getKhuyenmaiView();
              foreach ($result as $data) {
                $id_km = $data['id_khuyenmai'];
                $tenKM = $data['tenkhuyenmai'];
              ?>
                <option value="<?php echo $id_km; ?>"><?php echo $tenKM; ?></option>
              <?php
              }
              ?>
              </select>
              <div class="form-group">
                <label for="idbh">id bh</label></br>
                <select id="idbh" name="idbh">
                <?php
                $result = $sanpham->getBaohanhView();
                 foreach ($result as $data) {
                  $id_bh = $data['ID_Baohanh'];
                  $tenBH = $data['Tenbaohanh'];
                ?>
                  <option value="<?php echo $id_bh; ?>"><?php echo $tenBH; ?></option>
              <?php
              }
              ?>
                </select>
              </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" name='Edit' id="button_edit">Edit</button>
      </div>
    </div>
  </div>
</div>
 