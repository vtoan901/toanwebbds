<?php
    class Danhsachtacgia extends controller{
        protected $dstg;
        function __construct()
        {
            $this->dstg=$this->model('Tacgia');
        }
        function Get_data()
        {   
            $this->view('MasterLayout',[
                'page' => 'Danhsachtacgia_view',
                'dulieu'=>$this->dstg->tacgia_find('','')

            ]);
        }
        function find()
        {
            if (isset($_POST['btnTimKiem'])) 
            {
                $mtg = $_POST['txtMaTG'];
                $ttg = $_POST['txtTenTG'];
                $this->view('MasterLayout',[
                    'page' => 'Danhsachtacgia_view',
                    'dulieu'=>$this->dstg->tacgia_find($mtg,$ttg),
                    'mtg'=>$mtg,
                    'ttg'=>$ttg
                ]);
            }
        }
        function delete($mtg){
            $kq = $this->dstg->tacgia_delete($mtg);
            if($kq){
                echo "<script>alert ('Xóa thành công!')</script>";

            }else{
                echo "<script>alert ('Xóa thất bại!')</script>";

            }
            $this->view('MasterLayout',[
                'page' => 'Danhsachtacgia_view',
                'dulieu'=>$this->dstg->tacgia_find('',''),
                
            ]);

        }
        function update($mtg){
            $this->view('MasterLayout',[
                'page' => 'Suatacgia_view',
                'dulieu'=>$this->dstg->tacgia_find($mtg,'')
            ]);

        }
        function update_data(){
            if(isset($_POST['btnLuu']))
            {
                $mtg = $_POST['txtMaTG'];
                $ttg = $_POST['txtTenTG'];
                $dt = $_POST['txtSDT'];
                $email = $_POST['txtEmail'];
                $dc = $_POST['txtDiaChi'];

                $kq = $this->dstg->tacgia_update($mtg,$ttg,$dt,$email,$dc);
                if($kq){
                    echo "<script>alert ('Sửa thành công!')</script>";
    
                }else{
                    echo "<script>alert ('Sửa thất bại!')</script>";
    
                }
                $this->view('MasterLayout',[
                    'page' => 'Danhsachtacgia_view',
                    'dulieu'=>$this->dstg->tacgia_find('',''),
                    
                ]);
            }
        }
    }
?>