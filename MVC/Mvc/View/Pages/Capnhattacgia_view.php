<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật tác giả</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
    
    <form action="http://localhost/MVC/Capnhattacgia/insert" method="post">
        
        <table   style="text-align: centert; width: 50%; float: left;">
            <tr cosplan = "2" style="text-align: center;">
                <h1 >Cập nhật tác giả</h1>
            </tr>
            <tr>
                <td class="col1"><label for="">Mã tác giả: </label></td>
                <td class="col2"><input type="text" name="txtMaTG" value="<?php echo $data['mtg']?>"></td> 
            </tr>
            <tr>
                <td class="col1"><label for="">Tên tác giả: </label></td>
                <td class="col2"><input type="text" name="txtTenTG" value="<?php echo $data['ttg']?>"></td>  
            </tr>
            <tr>
                <td class="col1"><label for="">SĐT: </label></td>
                <td class="col2"><input type="text" name="txtSDT" value="<?php echo $data['dt']?>"></td>
            </tr>
            <tr>
                <td class="col1"><label for="">Email: </label></td>
                <td class="col2"><input type="email" name="txtEmail" value="<?php echo $data['email']?>"></td>
            </tr>
            <tr>
                <td class="col1"><label for="">Địa chỉ: </label></td>
                <td class="col2"><input type="text" name="txtDiaChi" value="<?php echo $data['dc']?>"></td>
            </tr>
            <tr>
                <td class="col1"></td>
                <td class="col2">
                    <input class="btn btn-success" style="text-align: center;" type="submit" name="btnLuu" value="Lưu">
                </td>
            </tr>
        </table>
    </form>
    
    
</body>
</html>