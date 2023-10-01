<?php
    class BietThu extends connectDB{
        function bietthu_ins($sb,$tn,$dc,$tt,$nxd,$sp,$dt,$gia,$anh){
            $sql = "INSERT INTO BietThu VALUES ('$sb','$tn','$dc','$tt','$nxd','$sp','$dt','$gia','$anh')";
            return mysqli_query($this->con,$sql);

        }
        function check_id($sb){
            $sql = "SELECT SoBlock FROM BietThu WHERE SoBlock = '$sb'";
            $dt = mysqli_query($this->con,$sql);
            $kq=false;
            if( mysqli_num_rows($dt) >0 ){
                $kq=true;
            }
            return $kq;
        }

        function bietthu_find($sb,$tn){
            $sql = "SELECT * FROM BietThu WHERE SoBlock like'%$sb%' AND TenNha like '%$tn%'";
            return mysqli_query($this->con, $sql);
        }
        function bietthu_delete($sb){
            $sql = "DELETE FROM BietThu WHERE SoBlock = '$sb'";
            return mysqli_query($this->con,$sql);
        }
        function bietthu_update($sb,$tn,$dc,$tt,$nxd,$sp,$dt,$gia,$anh){
            $sql = "UPDATE BietThu SET TenNha = '$tn' , DiaChi = '$dc', TrangThai = '$tt', NamXD = '$nxd', SoPhong = '$sp'
            , DienTich = '$dt', Gia = '$gia' , AnhDemo = '$anh'WHERE SoBlock = '$sb' ";
            return mysqli_query($this->con, $sql);
        }
    }
?>