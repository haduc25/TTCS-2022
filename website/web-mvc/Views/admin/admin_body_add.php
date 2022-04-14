<div class="row">
        <form action="insert-prod" method="POST" enctype="multipart/form-data">
            <label for="tensp" class="info-box-text mgl-28">Tên sản phẩm</label>
            <input type="text" id="tensp" name="tensp" class="form-control" placeholder="Nhập tên sản phẩm" required>
            
            <label for="sub_tensp" class="info-box-text mgl-28 mgt-16">Nội dung sản phẩm</label>
            <textarea rows="5" cols="60" id="sub_tensp" class="form-control" name="sub_tensp" placeholder=""></textarea>

            <label class="info-box-text mgl-28 mgt-16">Ảnh sản phẩm</label>
            <input type="file" id="imgsp" name="imgsp" class="mgl-28 w-20-percent">

            <label for="tensp" class="info-box-text mgl-28 mgt-16">Số lượng</label>
            <input type="number" id="quantity" name="slsp" class="form-control" min="1" max="1000" value="1">
            
            <div class= "mgt-32">
                <button type="submit" class="btn-submit">
                        <span class="btn-save">Save</span>
                </button>

                <a  href="../" class="mgl-28">Hủy bỏ</a>
            </div>


        </form> 


</div>
