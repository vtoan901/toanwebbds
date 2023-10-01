<?php
    class Danhsachbietthu extends controller{
        protected $dsbt;
        function __construct()
        {
            $this->dsbt=$this->model('BietThu');
        }
        function Get_data()
        {   
            $this->view('MasterLayout',[
                'page' => 'Danhsachbietthu_view',
                'dulieu'=>$this->dsbt->bietthu_find('','')

            ]);
        }
        function find()
        {
            if (isset($_POST['btnTimKiem'])) 
            {
                $sb = $_POST['txtSoBlock'];
                $tn = $_POST['txtTenNha'];
                $this->view('MasterLayout',[
                    'page' => 'Danhsachbietthu_view',
                    'dulieu'=>$this->dsbt->bietthu_find($sb,$tn),
                    'sb'=>$sb,
                    'tn'=>$tn
                ]);
            }
        }
        function delete($sb){
            $kq = $this->dsbt->bietthu_delete($sb);
            if($kq){
                echo "<script>alert ('Xóa thành công!')</script>";

            }else{
                echo "<script>alert ('Xóa thất bại!')</script>";

            }
            $this->view('MasterLayout',[
                'page' => 'Danhsachbietthu_view',
                'dulieu'=>$this->dsbt->bietthu_find('',''),
                
            ]);

        }
        function update($sb){
            $this->view('MasterLayout',[
                'page' => 'Suabietthu_view',
                'dulieu'=>$this->dsbt->bietthu_find($sb,'')
            ]);

        }
        function update_data(){
            if(isset($_POST['btnLuu']))
            {
                $sb = $_POST['txtSoBlock'];
                $tn = $_POST['txtTenNha'];
                $dc = $_POST['txtDiaChi'];
                $tt = $_POST['txtTrangThai'];
                $nxd = $_POST['txtNamXD'];
                $sp = $_POST['txtSoPhong'];
                $dt = $_POST['txtDienTich'];
                $gia = $_POST['txtGia'];
                $anh = $_POST['txtAnhDemo'];
                $kq = $this->dsbt->bietthu_update($sb,$tn,$dc,$tt,$nxd,$sp,$dt,$gia,$anh);
                if($kq){
                    echo "<script>alert ('Sửa thành công!')</script>";
    
                }else{
                    echo "<script>alert ('Sửa thất bại!')</script>";
    
                }
                $this->view('MasterLayout',[
                    'page' => 'Danhsachbietthu_view',
                    'dulieu'=>$this->dsbt->bietthu_find('',''),
                    
                ]);
            }
        }
    }
?>