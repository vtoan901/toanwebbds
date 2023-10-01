<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tác giả</title>
</head>

<body>
    <form action="http://localhost/MVC/Danhsachtacgia/find" method="post">
        <table>
            <tr>
                <td colspan=2 style="text-align: center;">
                    <h2>THÔNG TIN TÌM KIẾM TÁC GIẢ</h2>
                </td>
            </tr>
            <tr>
                <td class="col1">Mã tác giả</td>
                <td class="col2">
                    <input class="form-contrtol" type="text" name="txtMaTG" value="">
                </td>
            </tr>
            <tr>
                <td class="col1">Tên tác giả</td>
                <td class="col2">
                    <input class="form-contrtol" type="text" name="txtTenTG">
                </td>
            </tr>
            <tr>
                <td class="col1"></td>
                <td class="col2">
                    <input class="btn btn-success" type="submit" name="btnTimKiem" value="Tìm Kiếm">
                    <input class="btn btn-primary" type="submit" name="btnXuatExcel" value="Xuất Excel">
                </td>
            </tr>

        </table>



        <table border="1px" cellspacing=0 spacingcells=0 style="width: 60%; align-items: center;">
            <tr style="text-align: center; background-color: darkgrey;">
                <th>STT</th>
                <th>Mã Tác Giả</th>
                <th>Tên Tác Giả </th>
                <th>SĐT</th>
                <th>Email</th>
                <th>Địa Chỉ</th>
                <th></th>

            </tr>
            <?php
            // xử lý kết quả
            if (isset($data['dulieu']) && $data['dulieu'] != null) {
                $i = 0;
                while ($row = mysqli_fetch_array($data['dulieu'])) {
            ?>
                    <tr style="text-align: center;">
                        <td><?php echo ++$i ?></td>
                        <td><?php echo $row['Matacgia'] ?></td>
                        <td><?php echo $row['Tentacgia'] ?></td>
                        <td><?php echo $row['Dienthoai'] ?></td>
                        <td><?php echo $row['Email'] ?></td>
                        <td><?php echo $row['Diachi'] ?></td>
                        <td>
                            <a style="color: green;" href="http://localhost/MVC/Danhsachtacgia/update/<?php echo $row['Matacgia'] ?>">Sửa</a> &nbsp;&nbsp;&nbsp;
                            <a style="color: green;" href="http://localhost/MVC/Danhsachtacgia/delete/<?php echo $row['Matacgia'] ?>">Xóa</a> &nbsp;&nbsp;&nbsp;
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>

    </form>
</body>

</html>