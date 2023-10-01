<?php
    class Tacgia extends connectDB{
        function tacgia_ins($mtg,$ttg,$dt,$email,$dc){
            $sql = "INSERT INTO tacgia VALUES ('$mtg','$ttg','$dt','$email','$dc')";
            return mysqli_query($this->con,$sql);

        }
        function check_id($mtg){
            $sql = "SELECT Matacgia FROM tacgia WHERE Matacgia = '$mtg'";
            $dt = mysqli_query($this->con,$sql);
            $kq=false;
            if( mysqli_num_rows($dt) >0 ){
                $kq=true;
            }
            return $kq;
        }

        function tacgia_find($mtg,$ttg){
            $sql = "SELECT * FROM tacgia WHERE Matacgia like'%$mtg%' AND Tentacgia like '%$ttg%'";
            return mysqli_query($this->con, $sql);
        }
        function tacgia_delete($mtg){
            $sql = "DELETE FROM tacgia WHERE Matacgia = '$mtg'";
            return mysqli_query($this->con,$sql);
        }
        function tacgia_update($mtg,$ttg,$dt,$email,$dc){
            $sql = "UPDATE tacgia SET TenTacGia = '$ttg' , Dienthoai = '$dt', Email = '$email', Diachi = '$dc' WHERE Matacgia = '$mtg' ";
            return mysqli_query($this->con, $sql);
        }
        
    }
?>