<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa tác giả</title>
</head>
<body>
<form method="post" action="http://localhost/MVC/Danhsachtacgia/update_data">
        <table>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <h3>SỬA THÔNG TIN TÁC GIẢ</h3>
                </td>
            </tr>
            <?php
                if(isset($data['dulieu']) && $data['dulieu']!=null)
                {
                    while($row = mysqli_fetch_array($data['dulieu']))
                    {
            ?>
           
           <tr>
                <td class="col1"><label for="">Mã tác giả: </label></td>
                <td class="col2"><input type="text" name="txtMaTG" value="<?php echo $row['Matacgia']?>" readonly></td> 
            </tr>
            <tr>
                <td class="col1"><label for="">Tên tác giả: </label></td>
                <td class="col2"><input type="text" name="txtTenTG" value="<?php echo $row['Tentacgia']?>"></td>  
            </tr>
            <tr>
                <td class="col1"><label for="">SĐT: </label></td>
                <td class="col2"><input type="text" name="txtSDT" value="<?php echo $row['Dienthoai']?>"></td>
            </tr>
            <tr>
                <td class="col1"><label for="">Email: </label></td>
                <td class="col2"><input type="email" name="txtEmail" value="<?php echo $row['Email']?>"></td>
            </tr>
            <tr>
                <td class="col1"><label for="">Địa chỉ: </label></td>
                <td class="col2"><input type="text" name="txtDiaChi" value="<?php echo $row['Diachi']?>"></td>
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