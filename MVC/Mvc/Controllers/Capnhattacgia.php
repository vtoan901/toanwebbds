<?php
    class Capnhattacgia extends controller{
        protected $tg;
        protected $check;
        function __construct()
        {
            $this->tg=$this->model('Tacgia');
        }
        function Get_data(){
            $this->view('MasterLayout',[
                'page' => 'Capnhattacgia_view',
                'mtg'=>'',
                'ttg'=>'',
                'dt'=>'',
                'email'=>'',
                'dc'=>''
            ]);
        }
        function insert(){
            if(isset($_POST['btnLuu'])){
                $mtg = $_POST['txtMaTG'];
                $ttg = $_POST['txtTenTG'];
                $dt = $_POST['txtSDT'];
                $email = $_POST['txtEmail'];
                $dc = $_POST['txtDiaChi'];


                $check = $this->tg->check_id($mtg);
                if($mtg==null || $ttg  == null || $dt == null|| $email == null|| $dc == null){
                    echo"<script>alert('Điền đầy đủ đi')</script>";
                    echo header("refresh: 0");
                    exit();
                }else{
                    if($check == false){
                        $kq = $this->tg->tacgia_ins($mtg,$ttg,$dt,$email,$dc);
                        if($kq)
                            echo "<script>alert ('Thêm mới thành công!')</script>";
                        else
                            echo "<script>alert ('Thêm mới thất bại!')</script>";
                        
                        
                        }else{
                            echo "<script>alert ('Trùng mã loại!')</script>";
        
                        }
                        
                }
                $this->view('MasterLayout',[
                    'page' => 'Capnhattacgia_view',
                    'mtg' => $mtg,
                    'ttg' => $ttg,
                    'dt' => $dt,
                    'email' => $email,
                    'dc' => $dc,

                ]);
                
                
            }
        }
    }
?>