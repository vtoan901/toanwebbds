<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Bất Động Sản</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <style>
        *{margin: 0px;}
        header{
			width: 80%;
            height: 80px; 
            margin: 0px auto;
		}
        
		h1{text-align: center;}
		.nav-menu ul{
			
			
		}
		a{text-decoration: none; 
			color: black;}
		.nav-menu>ul>li{
			float: left;
			list-style: none;
			padding: 10px 20px;
		} 
		.nav-menu>ul>li>a:after{
			content: "";
            height: 5px;
            width: 0px;
            background-color:wheat;
            position: absolute;
            bottom: -3px;
            left: 3px;
            transition: all 0.5s ease-in-out;
		}
		.nav-menu>ul>li>a:hover::after
        {
            padding-left: 20px;
            width: 79%;         
        }
		.nav-menu a{
			font-size: 14px;
            color: rgba(0, 0, 0, 0.842);
            text-decoration: none;
            line-height: 20px;
            padding: 5px 20px 0px 20px;
            padding-left: 20px;
            text-transform: uppercase;
            font-weight: bold; 
            display: block;    
            position: relative;
		}
		.article a{
			color: white;
		}
		.article{
			width: 20%;
			background-color: #484848;
			float: left;
			height: 600px;
		}
		.article>ul{padding: 0px;}
		.article>ul>li{
			list-style: none;
			padding: 10px 5px;
			border: #B1B1B1 dotted 1px;
			
		}
		.article>ul>li:hover{
			display: block;
			background: #939393;
		}
		table{width: 80%;padding-top: 20px;
		}
		.col1{
			width: 20%;
			text-align: left;
			height: 25px;
			padding: 5px 35px;
		}
		.col2{
			width: 55%;
			text-align: left;
			height: 25px;
			padding: 5px;
		}
		.aside{
			height: 600px;
			background-color: #f3f1f0;
		}
		footer{
			height: 70px;
			background: #4f3590;
		}
		.dd1{
			width: 250px;
			height: 20px;
		}
		tr{height: 40px}
		.dd2{
			width: 30%;
			padding-left: 80px;
			font-size: 18px;
		}
		.dd3{
			width: 70%;
		}
		
    </style>
</head>
<body>
	<header>
	<nav class="nav-menu">
			<ul >
				<li><img src="http://bds10.maugiaodien.com/wp-content/uploads/2021/07/bds33-logo.png"></li>
				<li><a href="http://localhost/MVC/Danhsachbietthu/tim_kiem">Trang chủ</a></li>
				<li><a href="">Đăng nhập</a></li>
				<li><a href="">Tài Khoản</a></li>
				<li><a href="">Giới Thiệu</a></li>
				<li><a href="">Thoát</a></li>
			</ul>
		</nav>
	</header>
		
		<div class="article">
			<ul>
				<li><a href="http://localhost/MVC/Capnhatbietthu">Cập nhật biệt thự </a></li>
				<li><a href="http://localhost/MVC/Danhsachbietthu/tim_kiem">Danh sách biệt thự</a></li>
				<li><a href="http://localhost/MVC/Capnhattacgia">Cập nhật tác giả</a></li>
				<li><a href="http://localhost/MVC/Danhsachtacgia/tim_kiem">Danh sách tác giả</a></li>
				
			</ul>
		</div>
        <div class="aside">
            <?php
                include_once './Mvc/View/Pages/'.$data['page'].'.php';
            ?>
        </div>
</body>
</html>
		