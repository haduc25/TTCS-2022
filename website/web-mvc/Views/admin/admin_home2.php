     <div class="row">
        <span class="info-box-text" style="margin-left: 28px;">Macbook</span>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" style="padding-left: 15px;">#</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Nội dung sản phẩm</th>
                    <th scope="col">Ảnh sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col" colspan="2" class="tb-col1"><a href="login/add">Thêm</a></th>

                </tr>
            </thead>
            <tbody>
                <?php	
                    $stt = 1;
                    foreach ($products_1 as $prd_1) { 
                    
                    // var_dump($products); exit();
                    ?>
                        <tr>
                            <th scope="row" style="padding-left: 15px;"><?=$stt ?></th>
                            <?php /*var_dump($products_1[0]->id_sp); exit;*/ ?>
                            <td><?=$prd_1->ten_sp ?></td>
                            <td><?=$prd_1->sub_ten_sp ?></td>
                            <td><img src="<?= $prd_1->img_sp ?>" alt="<?=$prd_1->ten_sp ?>"></td>
                            <td><?=$prd_1->sl_sp ?></td>
                            <td><a href="#">Sửa</a></td>
                            <td><a href="#">Xóa</a></td>
                        </tr>
                <?php $stt++; } ?>


            </tbody>
            </table>

        </table>

        <!-- bang 2 -->
        <span class="info-box-text" style="margin-left: 28px;">iPad</span>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" style="padding-left: 15px;">#</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Nội dung sản phẩm</th>
                    <th scope="col">Ảnh sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col" colspan="2" class="tb-col1"><a href="#">Thêm</a></th>

                </tr>
            </thead>
            <tbody>
                <?php	
                    $stt = 1;
                    foreach ($products_2 as $prd_2) { 
                    
                    // var_dump($products); exit();
                    ?>
                        <tr>
                            <th scope="row" style="padding-left: 15px;"><?=$stt ?></th>
                            <?php /*var_dump($products_1[0]->id_sp); exit;*/ ?>
                            <td><?=$prd_2->ten_sp ?></td>
                            <td><?=$prd_2->sub_ten_sp ?></td>
                            <td><img src="../<?=$prd_2->img_sp ?>" alt="<?=$prd_2->ten_sp ?>" width="180"></td>
                            <td><?=$prd_2->sl_sp ?></td>
                            <td><a href="#">Sửa</a></td>
                            <td><a href="#">Xóa</a></td>
                        </tr>
                <?php $stt++; } ?>


            </tbody>
            </table>

        </table>


        
    </div>
