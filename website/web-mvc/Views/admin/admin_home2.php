     <div class="row">
        <div class="btn-them-sp">
            <a href="login/add" style="padding: 10px 12px;">Thêm sản phẩm</a>
        </div>
        <h3 class="info-box-text mgl-28 span-txt">1. Macbook</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="pl-15"></th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Nội dung sản phẩm</th>
                    <th scope="col">Ảnh sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php	
                    foreach ($products_1 as $prd_1) { 
                    
                    // var_dump($products); exit();
                    ?>
                        <tr class="table-border">
                            <th scope="row" style="padding-left: 15px;"></th>
                            <?php /*var_dump($products_1[0]->id_sp); exit;*/ ?>
                            <td><?=$prd_1->ten_sp ?></td>
                            <td><?=$prd_1->sub_ten_sp ?></td>
                            <td><img src="../<?= $prd_1->img_sp ?>" alt="<?=$prd_1->ten_sp ?>" width="150"></td>
                            <td><?=$prd_1->sl_sp ?></td>
                            <td><a href="#" class="btn btn-admin">Chỉnh sửa</a></td>
                            <td><a href="login/del?id=<?=$prd_1->id_sp?>" class="btn btn-admin">Xóa</a></td>
                        </tr>
                <?php } ?>


            </tbody>
            </table>

        </table>

        <!-- bang 2 -->
        <h3 class="info-box-text mgl-28 mgt-50 span-txt mgb-24">2. iPad</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="pl-15"></th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Nội dung sản phẩm</th>
                    <th scope="col">Ảnh sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php	
                    foreach ($products_2 as $prd_2) { 
                    
                    // var_dump($products); exit();
                    ?>
                        <tr class="table-border">
                            <th scope="row" class="pl-15"></th>
                            <?php /*var_dump($products_1[0]->id_sp); exit;*/ ?>
                            <td><?=$prd_2->ten_sp ?></td>
                            <td><?=$prd_2->sub_ten_sp ?></td>
                            <td><img src="../<?= $prd_2->img_sp ?>" alt="<?=$prd_2->ten_sp ?>" width="150"></td>
                            <td><?=$prd_2->sl_sp ?></td>
                            <td><a href="#" class="btn btn-admin">Chỉnh sửa</a></td>
                            <td><a href="login/del?id=<?=$prd_2->id_sp?>" class="btn btn-admin">Xóa</a></td>
                        </tr>
                <?php } ?>


            </tbody>
            </table>

        </table>


        
    </div>
