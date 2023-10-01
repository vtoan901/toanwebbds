<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
    
    <form action="http://localhost/MVC/Capnhatbietthu/insert" method="post">
        
        <table   style="text-align: centert; width: 50%; float: left;">
            <tr cosplan = "2" style="text-align: center;">
                <h1 >Quản Lí Thêm Biệt Thự</h1>
            </tr>
            <tr>
                <td class="col1"><label for="">Số Block: </label></td>
                <td class="col2"><input type="text" name="txtSoBlock" value="<?php echo $data['sb']?>"></td> 
            </tr>
            <tr>
                <td class="col1"><label for="">Tên Nhà: </label></td>
                <td class="col2"><input type="text" name="txtTenNha" value="<?php echo $data['tn']?>"></td> 
            </tr>
            <tr>
                <td class="col1"><label for="">Địa Chỉ: </label></td>
                <td class="col2"><input type="text" name="txtDiaChi" value="<?php echo $data['dc']?>"></td> 
            </tr>
            <tr>
                <td class="col1"><label for="">Trạng Thái: </label></td>
                <td class="col2"><input type="text" name="txtTrangThai" value="<?php echo $data['tt']?>"></td>  
            </tr>
            <tr>
                <td class="col1"><label for="">Năm xây dựng: </label></td>
                <td class="col2"><input type="text" name="txtNamXD" value="<?php echo $data['nxd']?>"></td>
            </tr>
            <tr>
                <td class="col1"><label for="">Số Phòng: </label></td>
                <td class="col2"><input type="text" name="txtSoPhong" value="<?php echo $data['sp']?>"></td>
            </tr>
            <tr>
                <td class="col1"><label for="">Diện Tích: </label></td>
                <td class="col2"><input type="text" name="txtDienTich" value="<?php echo $data['dt']?>"></td>
            </tr>
            <tr>
                <td class="col1"><label for="">Giá : </label></td>
                <td class="col2"><input type="text" name="txtGia" value="<?php echo $data['gia']?>"></td>
            </tr>   
            <tr>
                <td class="col1"><label for="">Ảnh Demo: </label></td>
                <td class="col2"><input type="text" name="txtAnhDemo" value="<?php echo $data['anh']?>"></td>
            </tr>
            <tr>
                <td class="col1"></td>
                <td class="col2">
                    <input style="text-align: center;" type="submit" name="btnLuu" value="Lưu">
                </td>
            </tr>
        </table>
    </form>
    
    
</body>
</html>