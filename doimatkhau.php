
<html lang="en">
    <?php
       if(isset($_GET['tk'])){
           $taikhoan=$_GET['tk'];
       } 
        include"ham.php";
        $conn=ketnoidataba();
      ?>      
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" integrity="" crossorigin="anonymous">
    <link rel="stylesheet" href="css/doimatkhau.css">
    <style>
        #menu1{
            list-style:none;
        }
        #menu1 ul.sub-menu1{
            position: absolute;
            background-color: white;
            padding: 15px 10px 10px;
            list-style:none;
            width:200px;
            display:none;    
        }
        #menu1 li:hover ul.sub-menu1{
            display:block;
        }
        #menu2{
            display:flex;
        }
        #menu1 ul.sub-menu1 li:hover a{
            background-color: lightblue;
        }
        #menu1 ul.sub-menu1 a{
            color:#1f60a1;
            padding: 8px 20px;
        }
        #menu{
            list-style:none;
        }
        #menu ul.sub-menu{
            position: absolute;
            background-color: #EEEEEE;
            list-style:none;
            width:220px;
            display:none; 
            z-index:2;
            left:450px;   
        }
        #menu li:hover ul.sub-menu{
            display:block;
        }
        #menu{
            display:flex;
        }
        #menu ul.sub-menu li:hover a{
            background-color: lightblue;
        }
        #menu ul.sub-menu a{
            color:#1f60a1;
            padding: 0px 0px;
        }
    </style>
</head>
<body>
    <div id="container">
        <!-- header -->
        <div id="header" style="height:90;border:1px solid gray">
         <img src="image/entraitim.jpg" id="icon" style=" margin-left:20px;margin-top:10;border:1px solid black" height="70" width=70>
            <div id="ten" style="line-height: 30px;margin-left: 20px;margin-right:-100">
            <h2 style="color:red;font-size: 35px;font-family:'Comic Scans'">FOOD</h2>
            <H3 style="color:red;font-size: 35px;font-family:'Comic Scans'">NUMBER ONE</H3>
            </div>
            <form action="TkMonAn.php?tk=<?php echo $taikhoan ?>" method="POST">
                <input type="text" style="width:400;margin-top:30;margin-right:10px;margin-left:250px" name="txt" placeholder="Địa điểm,món ăn,loại hình...">
                <input type="submit" value="Tìm kiếm">
            </form>
            <div id="menu2" style="margin-top:30">
            <?php
            $sqlten="SELECT * FROM tbtaikhoan WHERE taikhoan='$taikhoan'";
            $result = $conn->query($sqlten);
            $row8 = $result->fetch_assoc();
            ?>
            <ul id="menu1">
                <li><a style="margin-left:40px;font-size:20;color:#1f60a1;margin-top:5px;position: relative;"  class="fa fa-user"> <?php echo $row8['hovaten'] ?></a>
                <ul class="sub-menu1" style="text-align:center;margin-left:20px">
                <li><a href="doimatkhau.php?tk=<?php echo $taikhoan ?>">Đổi mật khẩu</a></li>
                <li><a href="dangnhap.php?delete=1" style="margin-top:5px;font-size:14px;color:#1f60a1;">Đăng xuất</a></li>
                </ul>
            </li>
            </ul>
            <a href="giohang.php?tk=<?php echo $taikhoan ?>"><img style="margin-left:50;margin-right:10px" src="image/giohang.png" alt="" width=30></a>
            <a href="giohang.php?tk=<?php echo $taikhoan ?>" style="font-size:20;color:#1f60a1;margin-right:10">Giỏ hàng</a>
            </div>
         </div>
        <!-- end header -->
        <!--begin #menu-->
        <div id="menu">
            <ul>
                <li style="margin-left: 200px;"><a href="index1.php?tk=<?php echo $taikhoan ?>"><span class="fa fa-home"> Trang chủ</span></a></li>
                <li style="margin-left: 200px;"><a href=""><span class="fa fa-percent"> Sản Phẩm</span></a>
            <ul class="sub-menu" style="z-index:10">
                <li><a href="sanphamchon.php?tim=NU&tk=<?php echo $taikhoan ?>">Nước uống</a></li>
                <li><a href="sanphamchon.php?tim=TD&tk=<?php echo $taikhoan ?>" style="margin-left:25">Trà</a></li>
                <li><a href="sanphamchon.php?tim=MNH&tk=<?php echo $taikhoan ?>">Đồ ăn vặt</a></li>
                <li><a href="sanphamchon.php?tim=COM&tk=<?php echo $taikhoan ?>" >Cơm Ngon</a></li>
            </ul>
            </li>
                <li style="margin-left: 200px;"><a href="tintuc.php?tk=<?php echo $taikhoan ?>"><span class="fa fa-rss"> Tin tức</span></a></li>
                <li style="margin-left: 200px;"><a href="gioithieu.php?tk=<?php echo $taikhoan ?>"><span class="fa fa-address-card"> Giới thiệu</span></a></li>
                <li style="margin-left: 200px;"><a href="lienhe.php?tk=<?php echo $taikhoan ?>"><span class="fa fa-phone"> Liên hệ</span></a></li>
            </ul>
        </div>
        <br>
        <br>
        <!-- đổi mât khẩu -->
        <?php
             $ktra="";
             $matkhau=$row8['matkhau'];
             //echo $matkhau;

             if(isset($_POST["DoiMK"])){
                 // lấy dữ liệu từ form
                 $matkhauhientai=$_POST["MatKhauHienTai"];
                 $matkhauhientai=md5($matkhauhientai);
                 $matkhaumoi=$_POST["MatKhauMoi"];
                 $nhaplaimk=$_POST["NLMatKhauMoi"];
                 if($matkhauhientai==""){
                     $ktra="Không được để trống";
                 }
                 else if($matkhaumoi==""){
                    $ktra="Không được để trống";
                }
                 else if($nhaplaimk==""){
                    $ktra="Không được để trống";
                }
                 else if($matkhauhientai!=$matkhau){
                     $ktra="Mật khẩu hiện tại không đúng";
                 }
                 else if(strlen($matkhaumoi)<4){
                    $ktra="Mật khẩu phải trên 4 ký tự";
                 }
                 else if(strlen($nhaplaimk)<4){
                    $ktra="Mật khẩu phải trên 4 ký tự";
                 }
                 else if($matkhaumoi!=$nhaplaimk){
                     $ktra="Mật khẩu không khớp";
                 }
                 else{
                     $matkhaumoi=md5($matkhaumoi);
                     $sqldoimk="UPDATE tbtaikhoan SET matkhau='$matkhaumoi' WHERE taikhoan='$taikhoan'";
                        if ($conn->query($sqldoimk) === TRUE) {
                            header("location:dangnhap.php?delete=1");
                        } else {
                        echo "Lỗi: " . $sql . "<br>" . $conn->error;
                        }
                        $conn->close();    
                 }

             }
        ?>


        <form action="" method="POST">
        <div id="dathang" >
                <div class="container col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <caption> 
                                <h2>Đổi mật khẩu</h2>
                                <span style="color:red" ><?php echo $ktra ?></span>
                            </caption>
                            <fieldset class="form-group">
                                    <label>Mật khẩu hiện tại</label> 
                                    <input type="password" id="NguoiNhan" value="" class="form-control" name="MatKhauHienTai">
                                    <label>Mật khẩu mới</label> 
                                    <input type="password" id="SoDienThoai" value="" class="form-control" name="MatKhauMoi">
                                    <label>Nhập lại mật khẩu mới</label> 
                                    <input type="password" id="DiaChi" value="" class="form-control" name="NLMatKhauMoi">
                            </fieldset>                
                                    <input type="submit" onclick="return confirm('Bạn chắc chắn đổi mật khẩu hay không');"style="padding:5px;background-color:#1f60a1;border-radius:2px;color:white;border:1px solid #1f60a1" name="DoiMK" value="Đổi mật khẩu" >
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                </form>
        <!-- end đổi mật khẩu -->
        <!-- footer -->
        <div class="footer">
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
            <hr style="margin-top:160;background-color:orange;border:1px solid orange">
            <font><marquee direction="left" style="background:orange;margin-top:5">Sự hài lòng của quý khách là niềm vinh hạnh đối với shop của chúng tôi. Xin trân trọng cảm ơn và hẹn gặp lại quý khách!</marquee></font>
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
        <!-- end footer -->
    </div>
</body>
</html>