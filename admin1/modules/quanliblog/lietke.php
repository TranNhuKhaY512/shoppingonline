<?php
    $sql_lietke_baibao = "SELECT * FROM tbl_baibao ORDER BY thutu ASC"; // goi tat cả dữ liệu từ tbl danh mục theo thứ tự từ nhỏ đến lớn
    $query_lietke_baibao = mysqli_query($mysqli,$sql_lietke_baibao);  //truy xuất dữ liệu vào 
?>
<div class="quanlymenu">
            <h3>Liệt kê bài báo </h3>

            <table class='lietkesp' >
                    <tr class="header_lietke">
                        <th>ID</th>
                        <th>Tên bài báo</th>
                        <th>Hình ảnh</th>
                        <th>Thời gian</th>
                        <th>Tóm tắt</th>
                        <th>Tình trạng</th>
                        <th>Tác giả</th>
                        <th class="them_menu4">Quản lý</th>
                    </tr>
                    <?php
                    //tăng thứ tự = biến i
                        $i=0;
                        while($row = mysqli_fetch_array($query_lietke_baibao)){
                            $i++;
                    ?>
                    
                    <tr>
                        <th><?php echo $i ?></th>
                        <th><?php echo $row['tenbaibao'] ?></th>
                        <th><img src="modules/quanliblog/imgblog/<?php echo $row['hinhanh']?>" width=100px ></th>
                        <th><?php echo $row['thoigian'] ?></th>
                        <th class="noidungchinhsach"><?php echo $row['tomtat'] ?></th>
                 
                        <th><?php  if($row['tinhtrang']==1){
                                    echo 'Kích hoạt';
                                    }else{
                                        echo 'Ẩn';
                                    }
            
                            ?>
                        </th>
                        <th><?php echo $row['tacgia'] ?></th>
<script>
// Hàm để xử lý xóa
        function confirmDelete(id) {
        if (confirm('Bạn có chắc chắn muốn xóa?')) {
            window.location.href = 'modules/quanliblog/xuly.php?idbaibao=' + id;
        }
        }
</script>
                        <th>
                            <a href="javascript:void(0);" onclick="confirmDelete(<?php echo $row['id_baibao']; ?>)">Xóa</a>  |  
                            <a href="index.php?action=quanliblog&query=sua&idbaibao=<?php echo $row['id_baibao']?>">Sửa</a> 
                        </th>
                    </tr>
                    <?php
                        }
                    ?>
                </form>
            </table>

        </div>