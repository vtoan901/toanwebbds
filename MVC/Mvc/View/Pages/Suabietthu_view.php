<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa loại sách</title>
</head>
<body>
<form method="post" action="http://localhost/MVC/Danhsachbietthu/update_data">
        <table>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <h3>SỬA THÔNG TIN VỀ LOẠI SÁCH</h3>
                </td>
            </tr>
            <?php
                if(isset($data['dulieu']) && $data['dulieu']!=null)
                {
                    while($row = mysqli_fetch_array($data['dulieu']))
                    {
            ?>
           
            <tr>
                <td class="col1">Số Block:</td>
                <td class="col2">
                    <input class="form-contrtol" type="text" name="txtSoBlock" value="<?php echo $row['SoBlock']?>" readonly>
                </td>
            </tr>
            <tr>
                <td class="col1">Tên Nhà:</td>
                <td class="col2">
                    <input class="form-contrtol" type="text" name="txtTenNha"value="<?php echo $row['TenNha']?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Địa chỉ:</td>
                <td class="col2">
                    <input class="form-contrtol" type="text" name="txtDiaChi"value="<?php echo $row['DiaChi']?>">
                </td>
            </tr> 
            <tr>
                <td class="col1">Trạng Thái:</td>
                <td class="col2">
                    <input class="form-contrtol" type="text" name="txtTrangThai"value="<?php echo $row['TrangThai']?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Năm Xây Dựng:</td>
                <td class="col2">
                    <input class="form-contrtol" type="text" name="txtNamXD"value="<?php echo $row['NamXD']?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Số Phòng:</td>
                <td class="col2">
                    <input class="form-contrtol" type="text" name="txtSoPhong"value="<?php echo $row['SoPhong']?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Mô tả:</td>
                <td class="col2">
                    <input class="form-contrtol" type="text" name="txtMoTa"value="<?php echo $row['Mota']?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Diện Tích:</td>
                <td class="col2">
                    <input class="form-contrtol" type="text" name="txtDienTich"value="<?php echo $row['DienTich']?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Giá:</td>
                <td class="col2">
                    <input class="form-contrtol" type="text" name="txtGia"value="<?php echo $row['Gia']?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Ảnh Demo:</td>
                <td class="col2">
                    <input class="form-contrtol" type="text" name="txtAnhDemo"value="<?php echo $row['AnhDemo']?>">
                </td>
            </tr>
             <?php
                    }
                }
            ?> 
            <tr>
                <td></td>
                <td>
                    <input class="btn btn-success" type="submit" name="btnLuu" value="Lưu"> &nbsp;&nbsp;&nbsp;
                    <input class="btn btn-primary" type="submit" name="btnBack" id="" value="Back">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>