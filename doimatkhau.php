
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
                <input type="text" style="width:400;margin-top:30;margin-right:10px;margin-left:250px" name="txt" placeholder="?????a ??i???m,m??n ??n,lo???i h??nh...">
                <input type="submit" value="T??m ki???m">
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
                <li><a href="doimatkhau.php?tk=<?php echo $taikhoan ?>">?????i m???t kh???u</a></li>
                <li><a href="dangnhap.php?delete=1" style="margin-top:5px;font-size:14px;color:#1f60a1;">????ng xu???t</a></li>
                </ul>
            </li>
            </ul>
            <a href="giohang.php?tk=<?php echo $taikhoan ?>"><img style="margin-left:50;margin-right:10px" src="image/giohang.png" alt="" width=30></a>
            <a href="giohang.php?tk=<?php echo $taikhoan ?>" style="font-size:20;color:#1f60a1;margin-right:10">Gi??? h??ng</a>
            </div>
         </div>
        <!-- end header -->
        <!--begin #menu-->
        <div id="menu">
            <ul>
                <li style="margin-left: 200px;"><a href="index1.php?tk=<?php echo $taikhoan ?>"><span class="fa fa-home"> Trang ch???</span></a></li>
                <li style="margin-left: 200px;"><a href=""><span class="fa fa-percent"> S???n Ph???m</span></a>
            <ul class="sub-menu" style="z-index:10">
                <li><a href="sanphamchon.php?tim=NU&tk=<?php echo $taikhoan ?>">N?????c u???ng</a></li>
                <li><a href="sanphamchon.php?tim=TD&tk=<?php echo $taikhoan ?>" style="margin-left:25">Tr??</a></li>
                <li><a href="sanphamchon.php?tim=MNH&tk=<?php echo $taikhoan ?>">????? ??n v???t</a></li>
                <li><a href="sanphamchon.php?tim=COM&tk=<?php echo $taikhoan ?>" >C??m Ngon</a></li>
            </ul>
            </li>
                <li style="margin-left: 200px;"><a href="tintuc.php?tk=<?php echo $taikhoan ?>"><span class="fa fa-rss"> Tin t???c</span></a></li>
                <li style="margin-left: 200px;"><a href="gioithieu.php?tk=<?php echo $taikhoan ?>"><span class="fa fa-address-card"> Gi???i thi???u</span></a></li>
                <li style="margin-left: 200px;"><a href="lienhe.php?tk=<?php echo $taikhoan ?>"><span class="fa fa-phone"> Li??n h???</span></a></li>
            </ul>
        </div>
        <br>
        <br>
        <!-- ?????i m??t kh???u -->
        <?php
             $ktra="";
             $matkhau=$row8['matkhau'];
             //echo $matkhau;

             if(isset($_POST["DoiMK"])){
                 // l???y d??? li???u t??? form
                 $matkhauhientai=$_POST["MatKhauHienTai"];
                 $matkhauhientai=md5($matkhauhientai);
                 $matkhaumoi=$_POST["MatKhauMoi"];
                 $nhaplaimk=$_POST["NLMatKhauMoi"];
                 if($matkhauhientai==""){
                     $ktra="Kh??ng ???????c ????? tr???ng";
                 }
                 else if($matkhaumoi==""){
                    $ktra="Kh??ng ???????c ????? tr???ng";
                }
                 else if($nhaplaimk==""){
                    $ktra="Kh??ng ???????c ????? tr???ng";
                }
                 else if($matkhauhientai!=$matkhau){
                     $ktra="M???t kh???u hi???n t???i kh??ng ????ng";
                 }
                 else if(strlen($matkhaumoi)<4){
                    $ktra="M???t kh???u ph???i tr??n 4 k?? t???";
                 }
                 else if(strlen($nhaplaimk)<4){
                    $ktra="M???t kh???u ph???i tr??n 4 k?? t???";
                 }
                 else if($matkhaumoi!=$nhaplaimk){
                     $ktra="M???t kh???u kh??ng kh???p";
                 }
                 else{
                     $matkhaumoi=md5($matkhaumoi);
                     $sqldoimk="UPDATE tbtaikhoan SET matkhau='$matkhaumoi' WHERE taikhoan='$taikhoan'";
                        if ($conn->query($sqldoimk) === TRUE) {
                            header("location:dangnhap.php?delete=1");
                        } else {
                        echo "L???i: " . $sql . "<br>" . $conn->error;
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
                                <h2>?????i m???t kh???u</h2>
                                <span style="color:red" ><?php echo $ktra ?></span>
                            </caption>
                            <fieldset class="form-group">
                                    <label>M???t kh???u hi???n t???i</label> 
                                    <input type="password" id="NguoiNhan" value="" class="form-control" name="MatKhauHienTai">
                                    <label>M???t kh???u m???i</label> 
                                    <input type="password" id="SoDienThoai" value="" class="form-control" name="MatKhauMoi">
                                    <label>Nh???p l???i m???t kh???u m???i</label> 
                                    <input type="password" id="DiaChi" value="" class="form-control" name="NLMatKhauMoi">
                            </fieldset>                
                                    <input type="submit" onclick="return confirm('B???n ch???c ch???n ?????i m???t kh???u hay kh??ng');"style="padding:5px;background-color:#1f60a1;border-radius:2px;color:white;border:1px solid #1f60a1" name="DoiMK" value="?????i m???t kh???u" >
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                </form>
        <!-- end ?????i m???t kh???u -->
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
            <hr style="margin-top:160;background-color:orange;border:1px solid orange">
            <font><marquee direction="left" style="background:orange;margin-top:5">S??? h??i l??ng c???a qu?? kh??ch l?? ni???m vinh h???nh ?????i v???i shop c???a ch??ng t??i. Xin tr??n tr???ng c???m ??n v?? h???n g???p l???i qu?? kh??ch!</marquee></font>
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
</body>
</html>