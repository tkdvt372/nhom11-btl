
<html lang="en">
    <?php
    session_start();
    if(isset($_GET['delete'])==1){
        unset($_SESSION['giohang']);
    }
       if(isset($_GET['tk'])){
           $taikhoan=$_GET['tk'];
       }
    ?>
     <?php 
            include"ham.php";
            $conn=ketnoidataba();
      ?>      
<head>
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" integrity="" crossorigin="anonymous">
    <link rel="stylesheet" href="css/trangchu.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
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
                <input type="text" style="width:500;margin-top:30;margin-right:10px;margin-left:230px" name="txt" placeholder="Địa điểm,món ăn,loại hình...">
                <input type="submit" value="Tìm kiếm">
            </form>
            <div id="menu2" style="margin-top:30">
            <?php
            $sqlten="SELECT hovaten FROM tbtaikhoan WHERE taikhoan='$taikhoan'";
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
        
        <!-- silde show -->
        <div id="slide">
            <div class="w3-content w3-section" style="position:relative;z-index:1">
                <img class="mySlides w3-animate-fading" src="image/3.jpg" style="width:100%;height:350px">
                <img class="mySlides w3-animate-fading" src="image/5.jpg" style="width:100%;height:350px">
                <img class="mySlides w3-animate-fading" src="image/2.jpg" style="width:100%;height:350px">
                <img class="mySlides w3-animate-fading" src="image/4.jpg" style="width:100%;height:350px">
              </div>
              
              <script>
              var myIndex = 0;
              carousel();
              
              function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 9000);    
              }
              </script>
        </div>
        <!-- end silde show -->
 
        <!-- khuyến mãi hôm nay -->
        <?php 
        $sql = "SELECT * FROM tbthemsp WHERE mahang LIKE 'KMHN%' ORDER BY mahang LIMIT 8";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        ?>
        <div id="kmhn">
             <b><h3>Khuyến mãi hôm nay</h3></b>
             <ul>
             <?php 
                while($row = $result->fetch_assoc()) {
                 ?>
                <li >
                    <div class="class1" >
                    <a href="sanpham.php?ten=<?php echo $taikhoan ?>&ma=<?php echo$row["mahang"] ?> "><img style="border:2px solid gray"    src="image/<?php echo $row["anh"] ?>" alt="" width=240 height=140></a>
                    <p><?php echo $row["tensp"] ?></p>
                    <form action="giohang.php?tk=<?php echo $taikhoan?>" method="POST">
                    <label style="margin-left:50px" for="">Số lượng:</label>    
                    <input type="number" name="soluong" min=1 max=20 value="1" style="border:1px solid white">
                    <input class="themgio" style="margin-top:2px;padding:5px;border-radius:4px;color:white;border:1px solid #1f60a1" type="submit" name="giohang"  value="Thêm vào giỏ hàng">
                    <input type="hidden" name="mahang" value="<?php echo $row["mahang"]?>">
                    <input type="hidden" name="tensp" value="<?php echo $row["tensp"]?>">
                    <input type="hidden" name="anh" value="<?php echo $row["anh"]?>">
                    <input type="hidden" name="gia" value="<?php echo $row["gia"]?>">
                    <input type="hidden" name="mota" value="<?php echo $row["mota"]?>">
                    <input type="hidden" name="nguyenlieu" value="<?php echo $row["nguyenlieu"]?>">
                   </form>
                   </div>

                </li>
                <?php 
                }
                ?>
                 
             </ul>
        </div>
        <?php
    }
        ?>
        <!-- end khuyến mãi hôm nay -->
        
        <!-- content -->
        <?php 
        $sql1 = "SELECT * FROM tbthemsp WHERE mahang LIKE 'MNBC%' ORDER BY mahang LIMIT 6";
        $result1 = $conn->query($sql1);
        if ($result1->num_rows > 0) {
        ?>
        <div id="content">
           <div class="left">
               <h3>Món ngon bán chạy</h3>
               <ul>
               <?php 
                while($row1 = $result1->fetch_assoc()) {
                 ?>
                <li>
                    <div class="class1">
                    <a href="sanpham.php?ten=<?php echo $taikhoan ?>&ma=<?php echo$row1["mahang"] ?> "><img style="border:2px solid gray" src="image/<?php echo $row1["anh"] ?>" alt="" width=230 height=130></a>
                    <p ><?php echo $row1["tensp"] ?></p>
                    <form action="giohang.php?tk=<?php echo $taikhoan?>" method="POST">
                    <label  style="margin-left:50px" for="">Số lượng:</label>
                    <input type="number" name="soluong" min=1 max=20 value="1" style="border:1px solid white">
                    <input class="themgio" style="margin-top:2px;padding:5px;border-radius:4px;color:white;border:1px solid #1f60a1" type="submit" name="giohang"  value="Thêm vào giỏ hàng">
                    <input type="hidden" name="mahang" value="<?php echo $row1["mahang"]?>">
                    <input type="hidden" name="tensp" value="<?php echo $row1["tensp"]?>">
                    <input type="hidden" name="anh" value="<?php echo $row1["anh"]?>">
                    <input type="hidden" name="gia" value="<?php echo $row1["gia"]?>">
                    <input type="hidden" name="mota" value="<?php echo $row1["mota"]?>">
                    <input type="hidden" name="nguyenlieu" value="<?php echo $row1["nguyenlieu"]?>">
                   </form>
                   </div>
                </li>
                <?php
                }
            }
                ?>
               </ul>
               <br>
               <?php 
        $sql2 = "SELECT * FROM tbthemsp WHERE mahang LIKE 'NU%' ORDER BY mahang LIMIT 6";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
        ?>
               <h3 style="clear:both;">Nước uống</h3>
               <ul>
               <?php 
                while($row2 = $result2->fetch_assoc()) {
                 ?>
                <li>
                    <div class="class1">
                    <a href="sanpham.php?ten=<?php echo $taikhoan ?>&ma=<?php echo$row2["mahang"] ?> "><img style="border:2px solid gray" src="image/<?php echo $row2["anh"] ?>" alt="" width=230 height=130></a>
                    <p ><?php echo $row2["tensp"] ?></p>
                    <form action="giohang.php?tk=<?php echo $taikhoan?>" method="POST">
                    <label style="margin-left:50px" for="">Số lượng:</label>
                    <input type="number" name="soluong" min=1 max=20 value="1" style="border:1px solid white">
                    <input class="themgio" style="margin-top:2px;padding:5px;border-radius:4px;color:white;border:1px solid #1f60a1" type="submit" name="giohang"  value="Thêm vào giỏ hàng">
                    <input type="hidden" name="mahang" value="<?php echo $row2["mahang"]?>">
                    <input type="hidden" name="tensp" value="<?php echo $row2["tensp"]?>">
                    <input type="hidden" name="anh" value="<?php echo $row2["anh"]?>">
                    <input type="hidden" name="gia" value="<?php echo $row2["gia"]?>">
                    <input type="hidden" name="mota" value="<?php echo $row2["mota"]?>">
                    <input type="hidden" name="nguyenlieu" value="<?php echo $row2["nguyenlieu"]?>">
                   </form>
                   </div>
                </li>
                <?php
                }
            }
                ?>


<br>
               <?php 
        $sql2 = "SELECT * FROM tbthemsp WHERE mahang LIKE 'COM%' ORDER BY mahang LIMIT 6";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
        ?>
               <h3 style="clear:both;">Cơm Trưa</h3>
               <ul>
               <?php 
                while($row2 = $result2->fetch_assoc()) {
                 ?>
                <li>
                    <div class="class1">
                    <a href="sanpham.php?ten=<?php echo $taikhoan ?>&ma=<?php echo$row2["mahang"] ?> "><img style="border:2px solid gray" src="image/<?php echo $row2["anh"] ?>" alt="" width=230 height=130></a>
                    <p ><?php echo $row2["tensp"] ?></p>
                    <form action="giohang.php?tk=<?php echo $taikhoan?>" method="POST">
                    <label style="margin-left:50px" for="">Số lượng:</label>
                    <input type="number" name="soluong" min=1 max=20 value="1" style="border:1px solid white">
                    <input class="themgio" style="margin-top:2px;padding:5px;background-color:#1f60a1;border-radius:4px;color:white;border:1px solid #1f60a1" type="submit" name="giohang"  value="Thêm vào giỏ hàng">
                    <input type="hidden" name="mahang" value="<?php echo $row2["mahang"]?>">
                    <input type="hidden" name="tensp" value="<?php echo $row2["tensp"]?>">
                    <input type="hidden" name="anh" value="<?php echo $row2["anh"]?>">
                    <input type="hidden" name="gia" value="<?php echo $row2["gia"]?>">
                    <input type="hidden" name="mota" value="<?php echo $row2["mota"]?>">
                    <input type="hidden" name="nguyenlieu" value="<?php echo $row2["nguyenlieu"]?>">
                   </form>
                   </div>
                </li>
                <?php
                }
            }
                ?>
                
               </ul>
           </div>
           <div class="right">
              <h5>Món ngon hot</h5>
              <?php 
        $sql3 = "SELECT * FROM tbthemsp WHERE mahang LIKE 'MNH%' ORDER BY mahang LIMIT 4";
        $result = $conn->query($sql3);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
        
        <a href="sanpham.php?ten=<?php echo $taikhoan ?>&ma=<?php echo$row["mahang"] ?> "><img style="border:2px solid gray" src="image/<?php echo $row["anh"] ?>" alt=""  width=160 height=120></a>
                   
              <p><?php echo $row["tensp"] ?></p>
              <hr style="border:1px solid orange;background-color:orange;margin:0px 10%">
              <?php 
            }
        }
                 ?>
              <br>
              <h5>Top đồ uống</h5>
              <?php 
        $sql3 = "SELECT * FROM tbthemsp WHERE mahang LIKE 'TDU%' ORDER BY mahang LIMIT 4";
        $result = $conn->query($sql3);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
        
        <a href="sanpham.php?ten=<?php echo $taikhoan ?>&ma=<?php echo$row["mahang"] ?> "><img style="border:2px solid gray" src="image/<?php echo $row["anh"] ?>" alt=""  width=160 height=120></a>
          
              <p><?php echo $row["tensp"] ?></p>
              <hr style="border:1px solid orange;background-color:orange;margin:0px 10%">
              <?php 
            }
        }
                 ?>
           </div>
        </div>
        <!-- end content -->

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
    <?php $conn->close(); ?>

</body>
</html>