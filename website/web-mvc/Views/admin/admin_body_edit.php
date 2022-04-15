<div class="row">
        <form action="edit-prod?id=<?=$value->id_sp?>" method="POST" enctype="multipart/form-data">
            <label for="tensp" class="info-box-text mgl-28">Tên sản phẩm</label>
            <input type="text" id="tensp" name="tensp" class="form-control1" placeholder="Nhập tên sản phẩm" value="<?= $value->ten_sp ?>" required>
            
            <label for="sub_tensp" class="info-box-text mgl-28 mgt-16">Nội dung sản phẩm</label>
            <textarea rows="5" cols="60" id="sub_tensp" class="form-control1" name="sub_tensp" placeholder=""><?= $value->sub_ten_sp ?></textarea>

            <label class="info-box-text mgl-28 mgt-16">Ảnh sản phẩm</label>
            <?php if($value->img_sp){?>  <img src="../../<?= $value->img_sp ?>"  alt="<?= $value->ten_sp ?>" width="300" class="img-sp"> <?php } ?>
            <input type="file" id="imgsp" name="imgsp" class="mgl-28 w-20-percent">

            <label for="id_dm" class="info-box-text mgl-28 mgt-16">Danh mục sản phẩm</label>
            <select name="id_dm" id="id_dm" class="mgl-28 w-20-percent h-28">
                <option selected="selected"><?php if($_id_dm != "empty"){echo $_id_dm;} ?></option>
                <option value="macbook">Macbook</option>
                <option value="ipad">iPad</option>
                <option value="iphone">iPhone</option>
                <option value="aWatch">Apple Watch</option>
                <option value="aTV">Apple TV</option>
                <option value="aMusic">Apple Music</option>
            </select>


            <label for="tensp" class="info-box-text mgl-28 mgt-16">Số lượng</label>
            <input type="number" id="quantity" name="slsp" class="form-control1" min="1" max="1000" value="<?= $value->sl_sp ?>">
            
            <div class= "mgt-32">
                <button type="submit" class="btn-submit">
                        <span class="btn-save">Save</span>
                </button>

                <a  href="../login" class="mgl-28">Hủy bỏ</a>
            </div>


        </form> 


</div>
