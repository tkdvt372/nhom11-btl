
<?php
include"ham.php";
$conn=ketnoidataba();
if ($conn->connect_error) {
die("Kết nối thất bại: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" integrity="" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sanpham.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script>
        
        var i =1;
        function giamsl(){  
            document.getElementById('sl').value=--i;
            if(i>1){
            document.getElementById('gia').value=parseInt(document.getElementById('gia').value) - parseInt(document.getElementById('giagoc').value);
            }else{
            document.getElementById('gia').value=parseInt(document.getElementById('gia').value) / 2;
            i =2;
            document.getElementById('gia').value=document.getElementById('giagoc').value;
            }
            document.getElementById('sltruyen').value=document.getElementById('sl').value;
            }
        function tangsl(){
            
            document.getElementById('sl').value=++i;
            document.getElementById('gia').value=parseInt(document.getElementById('giagoc').value) * i;
            document.getElementById('sltruyen').value=document.getElementById('sl').value;
            
            
        }

        
    </script>
</head>
<?php 

    
    if(isset($_GET["ma"])){
        $mahang=$_GET["ma"];
    }
           
           $sql1 = "SELECT * FROM tbthemsp where mahang='$mahang'";   
           $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc()
                
           ?>
<body>
    <div id="container">
        <!-- header -->
        <div id="header" style="height:90;border:1px solid gray">
         <img src="image/entraitim.jpg" id="icon" style=" margin-left:20px;margin-top:10;border:1px solid black" height="70" width=70>
            <div id="ten" style="line-height: 30px;margin-left: 20px;margin-right:-100">
            <h2 style="color:red;font-size: 35px;font-family:'Comic Scans'">FOOD</h2>
            <H3 style="color:red;font-size: 35px;font-family:'Comic Scans'">NUMBER ONE</H3>
            </div>
            <form action="#" method="POST">
                <input type="text" style="width:500;margin-top:30;margin-right:10px;margin-left:230px;height:30px;" name="txt" placeholder="Địa điểm,món ăn,loại hình...">
                <a style="margin-top:30px;"><input type="submit" value="Tìm kiếm"></a>
           </form>
            <div id="header" style="margin-top:30">
            <ul>
            <a style="margin-left:40px;color:#1f60a1;margin-top:5px;position: relative;" href="dangnhap.php">Đăng nhập</a>
            
            <a href="dangnhap.php"><img style="margin-left:50" src="image/giohang.png" alt="" width=30></a>
            <a href="dangnhap.php" style="font-size:18;color:#1f60a1;margin-right:20px;">Giỏ hàng</a>
            </ul>
            </div>
           
         </div>
        <!-- end header -->
        <!--begin #menu-->
        <div id="menu">
            <ul>
                <li><a href="index.php"><span class="fa fa-home"> Trang chủ</span></a></li>
                <li><a href="dangnhap.php"><span class="fa fa-percent">Sản Phẩm</span></a></li>
                <li><a href="dangnhap.php"><span class="fa fa-rss"> Tin tức</span></a></li>
                <li><a href="dangnhap.php"><span class="fa fa-address-card"> Giới thiệu</span></a></li>
                <li><a href="dangnhap.php"><span class="fa fa-phone"> Liên hệ</span></a></li>
            </ul>
        </div>
        <div id="thongtin">
            <img id="anhto" src="image/<?php echo $row['anh'] ?>  " >
        </div>
        <div id="chucai">
            <b><h1><?php echo $row['tensp'] ?></h1></b>
            <b>
                <p>Mô tả:</b><?php echo $row['mota'] ?></p>
            <b>
                <p>Địa chỉ:</b><?php echo $row['diachi'] ?></p>
            <b>
                <p>Nguyên liệu:</b><?php echo $row['nguyenlieu'] ?></p>
            <b>
                <p>Đánh giá:</b></p>
            
        </div>
        <div id="dathang">
        <form action="dangnhap.php" method="POST">
            <b><p id="chuso">Số lượng:</p></b>
            <div id="nutbam">
                <b><input onclick="giamsl()" class="tanggiam" type="button" value="-"></b>
                <b><input id="sl" type="button" value="1" min="1" ></b>
                <b><input onclick="tangsl()" class="tanggiam" type="button" value="+"></b>
            </div>
            <b>
                    <input id="gia" name="gia" type="button" value="<?php echo $row['gia'] ?>"> 
                    <input type="hidden" name="gia" id="giagoc" value="<?php echo $row['gia'] ?>"><a>Đồng</a>
                    <input id="nut"  type="submit" name="giohang"  value="Thêm món">
                    <input type="hidden" name="mahang" value="<?php echo $row["mahang"]?>">
                    <input type="hidden" name="tensp" value="<?php echo $row["tensp"]?>">
                    <input type="hidden" name="anh" value="<?php echo $row["anh"]?>">
                    <input type="hidden" name="mota" value="<?php echo $row["mota"]?>">
                    <input type="hidden" name="nguyenlieu" value="<?php echo $row["nguyenlieu"]?>">
                    <input id="sltruyen" type="hidden" name="soluong" value=1>
                   </form>
                <p id="vat">Giá trên chưa bao gồm 10% VAT</p>
            </b>
            <?php
            
            }
        ?>
        </div>
        
        <div style="margin-top:200px" class="footer">
            <div id="top-footer">
                <h3>Top thành viên</h3>
                <ul>
                <?php
                $sqlTOP = "SELECT hovaten FROM tbtaikhoan ORDER BY hovaten LIMIT 6";
                $result3 = $conn->query($sqlTOP);
                while($row9 = $result3->fetch_assoc()) {
                ?>
                    <li>
                        <img style="margin-left:35px;border:1px solid orange" src="image/én chu mỏ.jpg" alt="" width=80 height=80>
                        <p ><?php echo $row9['hovaten'] ?></p>
                    </li>
                    <?php 
                    }
                    ?>

                </ul>
            </div>
            <font><marquee direction="left" style="background:orange">Sự hài lòng của quý khách là niềm vinh hạnh đối với shop của chúng tôi. Xin trân trọng cảm ơn và hẹn gặp lại quý khách!</marquee></font>
            <div id= bot-footer>
                <ul>
                    <li>
                        <p><b>Khám phá</b></p>
                        <p>Ứng dụng mobile</p>
                        <p>Viết bình luận</p>
                        <p>Tạo bộ sưu tập</p>
                        <p>Phần thưởng</p>
                        <p>Bảo mật thông tin</p>
                        <p>Quy định</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <p><b>Công ty</b></p>
                        <p>Giới thiệu</p>
                        <p>Trợ giúp</p>
                        <p>Làm việc</p>
                        <p>Nhà Đầu Tư</p>
                        <p>Góp ý</p>
                        <p>Thỏa thuận và sử dụng dịch vụ</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <p></p><b>Tham gia trên</b></p>
                        <p>Facebook</p>
                        <p>YouTuber</p>
                        <p>Instagram</p>
                        <p>Shopee</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <p><b>Giấy phép đăng kí số</b></p>
                        <p>MXH 363/GP-BTTTT</p>
                    </li>
                </ul>
            </div>
        </div>
<?php $conn->close(); ?>       
</body>
</html>