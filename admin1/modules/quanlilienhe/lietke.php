<?php
    $sql_lietke_lienhe = "SELECT * FROM tbl_lienhe ORDER BY thutu ASC"; // goi tat cả dữ liệu từ tbl danh mục theo thứ tự từ nhỏ đến lớn
    $query_lietke_lienhe = mysqli_query($mysqli,$sql_lietke_lienhe);  //truy xuất dữ liệu vào 
    
?>
<div class="quanlymenu">
    <h3>Liệt kê liên hệ </h3>

    <table class='lietke_menu'>
            <tr class="header_lietke">
                <td>ID</td>
                <td class="them_menu2" style="width: 300px;">Liên hệ</td>
                <td class="them_menu4">Quản lý</td>
            </tr>
            <?php
                $i=0;
                while($row = mysqli_fetch_array($query_lietke_lienhe)){
                    $i++;
                //gán tất cả dữ liệu vào $row và i tăng dần
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['lienhe'] ?></td>
                <td>
                <a href="./modules/quanlilienhe/xuly.php?idlienhe=<?php echo $row['id_lienhe']?>"
                onclick="return confirm('Bạn có chắc chắn muốn xóa liên hệ này không?');">Xóa</a> |
                <a href="index.php?action=quanlilienhe&query=sua&idlienhe=<?php echo $row['id_lienhe']?>" name="sualienhe">Sửa</a>
                   

                </td>
            </tr>
            <?php
                }
            ?>
        </form>
    </table>
 </div>