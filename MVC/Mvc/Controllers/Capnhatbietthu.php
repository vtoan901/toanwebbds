<?php
    class Capnhatbietthu extends controller{
        protected $check;
        protected $bt;
        function __construct()
        {
            $this->bt=$this->model('BietThu');
        }
        function Get_data(){
            $this->view('MasterLayout',[
                'page' => 'Capnhatbietthu_view',
                'sb'=>'',
                'tn'=>'',
                'dc'=>'',
                'tt'=>'',
                'nxd'=>'',
                'sp'=>'',
                'dt'=>'',
                'gia'=>'',
                'anh'=>''
            ]);
        }
        function insert(){
            if(isset($_POST['btnLuu'])){
                $sb = $_POST['txtSoBlock'];
                $tn = $_POST['txtTenNha'];
                $dc = $_POST['txtDiaChi'];
                $tt = $_POST['txtTrangThai'];
                $nxd = $_POST['txtNamXD'];
                $sp = $_POST['txtSoPhong'];
                $dt = $_POST['txtDienTich'];
                $gia = $_POST['txtGia'];
                $anh = $_POST['txtAnhDemo'];


                $check = $this->bt->check_id($sb);
                if($sb==null || $tt  == null || $nxd == null){
                    echo"<script>alert('Điền đầy đủ đi')</script>";
                    echo header("refresh: 0");
                    exit();
                }else{
                    if($check == false){
                        $kq = $this->bt->bietthu_ins($sb,$tn,$dc,$tt,$nxd,$sp,$dt,$gia,$anh);
                        if($kq)
                            echo "<script>alert ('Thêm mới thành công!')</script>";
                        else
                            echo "<script>alert ('Thêm mới thất bại!')</script>";
                        
                        
                        }else{
                            echo "<script>alert ('Trùng mã loại!')</script>";
        
                        }
                        
                }
                $this->view('MasterLayout',[
                    'page' => 'Capnhatbietthu_view',
                    'sb'=> $sb,
                    'tn'=> $tn,
                    'dc'=> $dc,
                    'tt'=> $tt,
                    'nxd'=>$nxd,
                    'sp'=>$sp,
                    'dt'=>$dt,
                    'gia'=>$gia,
                    'anh'=>$anh
                ]);
                
                
            }
        }
    }
?>