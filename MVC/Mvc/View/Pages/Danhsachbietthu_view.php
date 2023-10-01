<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách loại sách</title>
</head>

<body>
    <form action="http://localhost/MVC/Danhsachbietthu/find" method="post">
        <table>
            <tr>
                <td colspan=2 style="text-align: center;">
                    <h2>THÔNG TIN TÌM KIẾM BIỆT THỰ</h2>
                </td>
            </tr>
            <tr>
                <td class="col1">Số Block</td>
                <td class="col2">
                    <input class="form-contrtol" type="text" name="txtSoBlock" value="">
                </td>
            </tr>
            <tr>
                <td class="col1">Tên Nhà</td>
                <td class="col2">
                    <input class="form-contrtol" type="text" name="txtTenLoai">
                </td>
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
                <th>Số Block</th>
                <th>Tên Nhà</th>
                <th>Địa Chỉ</th>
                <th>Trạng Thái </th>
                <th>Năm xây dựng</th>
                <th>Số Phòng</th>
                <th>Diện Tích</th>
                <th>Giá</th>
                <th>Ảnh Demo</th>
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
                        <td><?php echo $row['SoBlock'] ?></td>
                        <td><?php echo $row['TenNha'] ?></td>
                        <td><?php echo $row['DiaChi'] ?></td>
                        <td><?php echo $row['TrangThai'] ?></td>
                        <td><?php echo $row['NamXD'] ?></td>
                        <td><?php echo $row['SoPhong'] ?></td>
                        <td><?php echo $row['DienTich'] ?></td>
                        <td><?php echo $row['Gia'] ?></td>
                        <td><img src="<?php echo $row['AnhDemo'] ?>" alt="AnhDemo"></td>
                        <td>
                            <a style="color: green;" href="http://localhost/MVC/Danhsachbietthu/update/<?php echo $row['SoBlock'] ?>">Sửa</a> &nbsp;&nbsp;&nbsp;
                            <a style="color: green;" href="http://localhost/MVC/Danhsachbietthu/delete/<?php echo $row['SoBlock'] ?>">Xóa</a> &nbsp;&nbsp;&nbsp;
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