<?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu ASC"; // goi tat cả dữ liệu từ tbl danh mục theo thứ tự từ nhỏ đến lớn
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);  //truy xuất dữ liệu vào 
    
?>
<div class="quanlymenu">
    <h3>Liệt kê danh mục sản phẩm </h3>

    <table class='lietke_menu' >
            <tr class="header_lietke">
                <td>ID</td>
                <td class="them_menu2">Tên Menu</td>
                <td class="them_menu4">Quản lý</td>
            </tr>
            <?php
                $i=0;
                while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
                    $i++;
                //gán tất cả dữ liệu vào $row và i tăng dần
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['tendanhmuc'] ?></td>
                <td>
                    <!-- script xóa -->
                <a href="./modules/quanlimenu/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>"
                onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">Xóa</a> |
                <a href="index.php?action=quanlimenu&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>" name="suamenu">Sửa</a>
                   

                </td>
            </tr>
            <?php
                }
            ?>
        </form>
    </table>
 </div>