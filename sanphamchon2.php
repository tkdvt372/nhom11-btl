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
        .themgio{
            background-color:#1f60a1;
        }
        .themgio:hover{
            background-color: orange;
        }
        img:hover {
        transform: scale(1.1);
        }
        #dangnhap{
            display:flex;
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
<html>
<?php
   if(isset($_GET["tim"]))
   {
    $timkiem=$_GET["tim"];
   }
   include"ham.php";
$conn=ketnoidataba();
?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" integrity="" crossorigin="anonymous">
    <link rel="stylesheet" href="css/TkMonAn.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                <input type="text" style="width:500;margin-top:30;margin-right:10px;margin-left:230px;height:30px;" name="txt" placeholder="?????a ??i???m,m??n ??n,lo???i h??nh...">
                <a style="margin-top:30px;"><input type="submit" value="T??m ki???m"></a>
           </form>
            <div id="header" style="margin-top:30">
            <ul>
            <a style="margin-left:40px;color:#1f60a1;margin-top:5px;position: relative;" href="dangnhap.php">????ng nh???p</a>
            
            <a href="dangnhap.php"><img style="margin-left:50" src="image/giohang.png" alt="" width=30></a>
            <a href="dangnhap.php" style="font-size:18;color:#1f60a1;margin-right:20px;">Gi??? h??ng</a>
            </ul>
            </div>
           
         </div>
        <!-- end header -->
        <!--begin #menu-->
        <div id="menu">
            <ul>
                <li style="margin-left: 200px;"><a href="index.php"><span class="fa fa-home"> Trang ch???</span></a></li>
                <li style="margin-left: 200px;"><a href=""><span class="fa fa-percent"> S???n Ph???m</span></a>
                <ul class="sub-menu" style="z-index:10">
                <li><a href="sanphamchon2.php?tim=NU">N?????c u???ng</a></li>
                <li><a href="sanphamchon2.php?tim=TD" style="margin-left:25">Tr??</a></li>
                <li><a href="sanphamchon2.php?tim=MNH">????? ??n v???t</a></li>
                <li><a href="sanphamchon2.php?tim=COM" >C??m Ngon</a></li>
            </ul>
            </li>
                <li style="margin-left: 200px;"><a href="tintuc1.php"><span class="fa fa-rss"> Tin t???c</span></a></li>
                <li style="margin-left: 200px;"><a href="gioithieu1.php"><span class="fa fa-address-card"> Gi???i thi???u</span></a></li>
                <li style="margin-left: 200px;"><a href="lienhe1.php"><span class="fa fa-phone"> Li??n h???</span></a></li>
            </ul>
        </div>
	    <!--end #menu-->
        <!-- silde show -->
         <div id="slide">
            <div class="w3-content w3-section" style="">
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
        <?php 
            
            $sql = "SELECT * FROM tbthemsp where mahang LIKE '%$timkiem%'"; 
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
        ?>
         <!-- khuy???n m??i h??m nay -->
         <div id="kmhn">
             <h3>S???n Ph???m Ngon</h3>
             <ul>
             <?php
                        // hi???n th??? t???ng d??ng d??? li???u
                        while($row = $result->fetch_assoc()) {
                            ?>
                 <li>
                     <div class="class1">
                     <a href="sanpham2.php?ma=<?php echo$row["mahang"] ?> "><img src="image/<?php echo $row["anh"] ?>" alt="" width=230 height=130></a>
                    <p><?php echo $row["tensp"] ?></p>
                    <form action="dangnhap.php" method="POST">
                    <label style="margin-left:50px" for="">S??? l?????ng:</label>
                    <input type="number" name="soluong" min=1 max=20 value="1" style="border:1px solid white">
                    <input class="themgio" style="margin-top:2px;padding:5px;border-radius:4px;color:white;border:1px solid #1f60a1" type="submit" name="giohang"  value="Th??m v??o gi??? h??ng">
                    <input type="hidden" name="mahang" value="<?php echo $row["mahang"]?>">
                    <input type="hidden" name="tensp" value="<?php echo $row["tensp"]?>">
                    <input type="hidden" name="anh" value="<?php echo $row["anh"]?>">
                    <input type="hidden" name="gia" value="<?php echo $row["gia"]?>">
                    <input type="hidden" name="mota" value="<?php echo $row["mota"]?>">
                    <input type="hidden" name="nguyenlieu" value="<?php echo $row["nguyenlieu"]?>">
                   </form>
                    </div>
                 </li>
                 <?php  } ?>
             </ul>
        </div>
        <!-- end khuy???n m??i h??m nay -->
        <?php } ?>
        <!-- footer -->
        <div class="footer">
            <div id="top-footer">
                <h3>Top th??nh vi??n</h3>
                <ul>
                <?php
                $sqlTOP = "SELECT hovaten FROM tbtaikhoan ORDER BY hovaten LIMIT 6";
                $result3 = $conn->query($sqlTOP);
                while($row9 = $result3->fetch_assoc()) {
                ?>
                    <li>
                        <img style="margin-left:35px;border:1px solid orange" src="image/??n chu m???.jpg" alt="" width=80 height=80>
                        <p ><?php echo $row9['hovaten'] ?></p>
                    </li>
                    <?php 
                    }
                    ?>
                </ul>
            </div>
            <font><marquee direction="left" style="background:orange">S??? h??i l??ng c???a qu?? kh??ch l?? ni???m vinh h???nh ?????i v???i shop c???a ch??ng t??i. Xin tr??n tr???ng c???m ??n v?? h???n g???p l???i qu?? kh??ch!</marquee></font>
            <div id= bot-footer>
                <ul>
                    <li>
                        <p><b>Kh??m ph??</b></p>
                        <p>???ng d???ng mobile</p>
                        <p>Vi???t b??nh lu???n</p>
                        <p>T???o b??? s??u t???p</p>
                        <p>Ph???n th?????ng</p>
                        <p>B???o m???t th??ng tin</p>
                        <p>Quy ?????nh</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <p><b>C??ng ty</b></p>
                        <p>Gi???i thi???u</p>
                        <p>Tr??? gi??p</p>
                        <p>L??m vi???c</p>
                        <p>Nh?? ?????u T??</p>
                        <p>G??p ??</p>
                        <p>Th???a thu???n v?? s??? d???ng d???ch v???</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <p></p><b>Tham gia tr??n</b></p>
                        <p>Facebook</p>
                        <p>YouTuber</p>
                        <p>Instagram</p>
                        <p>Shopee</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <p><b>Gi???y ph??p ????ng k?? s???</b></p>
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