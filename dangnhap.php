<html>

        <style>
                * {
                    margin: 0;
                    padding: 0;
                }
                .form {
                    margin:2% auto;
                    width: 400px;
                    border-radius: 10px;
                    overflow: hidden;
                    padding: 55px 55px 37px;
                    background: #9152f8;
                    background: -webkit-linear-gradient(top,#7579ff,#b224ef);
                    background: -o-linear-gradient(top,#7579ff,#b224ef);
                    background: -moz-linear-gradient(top,#7579ff,#b224ef);
                    background: linear-gradient(top,#7579ff,#b224ef);
                    text-align: center;
                }
                .form h2 {
                    font-size: 30px;
                    color: #fff;
                    line-height: 1.2;
                    text-align: center;
                    text-transform: uppercase;
                    display: block;
                    margin-bottom: 30px;
                }

                .form input[type=text], .form input[type=password] {
                    font-family: Poppins-Regular;
                    font-size: 16px;
                    color: #fff;
                    line-height: 1.2;
                    display: block;
                    width: calc(100% - 10px);
                    height: 45px;
                    background: 0 0;
                    padding: 10px 0;
                    border-bottom: 2px solid rgba(255,255,255,.24)!important;
                    border: 0;
                    outline: 0;
                }
                .form input[type=text]::focus, .form input[type=password]::focus {
                    color: red;
                }
                .form input[type=password] {
                    margin-bottom: 20px;
                }
                .form input::placeholder {
                    color: #fff;
                }
                .checkbox {
                    display: block;
                }
                .form input[type=submit] {
                    font-size: 16px;
                    color: #555;
                    line-height: 1.2;
                    padding: 0 20px;
                    min-width: 120px;
                    height: 50px;
                    border-radius: 25px;
                    background: #fff;   
                    position: relative;
                    z-index: 1;
                    border: 0;
                    outline: 0;
                    display: block;
                    margin: 30px auto;
                }
                #checkbox {
                    display: inline-block;
                    margin-right: 10px;
                }
                .checkbox-text {
                    color: #fff;
                }
                .psw-text {
                    color: #fff;
                    text-decoration:none ;
                }
                a{
                    color:#fff;
                }
        </style>
        <!-- php ki???m tra ????ng nh???p -->
        <?php
        error_reporting(0);
        session_start();
        if(isset($_GET['delete'])==1){
            unset($_SESSION['giohang']);
        }
        $ktra="";
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $taikhoan=$_POST["username"];
                $matkhau=$_POST["password"];
                
                if($taikhoan=="admin" && $matkhau=="admin"){
                    header("location:thongke.php");
                }else{
                    $matkhau=md5($matkhau);
                    include"ham.php";
                    $conn=ketnoidataba();
                    // Ki???m tra k???t n???i
                    if ($conn->connect_error) 
                    {
                        die("K???t n???i th???t b???i: " . $conn->connect_error);
                    }
                    $sql="SELECT * FROM tbtaikhoan WHERE taikhoan='$taikhoan' AND matkhau='$matkhau'";
                    $user=mysqli_query($conn,$sql);
                    $count=mysqli_num_rows($user);
                    if( $count > 0)
                    {
                       header("location:index1.php?tk=$taikhoan");
                    }
                    else
                       $ktra="---------T??i kho???n m???t kh???u kh??ng ch??nh x??c---------";
                    $conn->close(); 
                
                }
        }               
        ?>
    <body>
    <div class="form">
      <h2>????ng nh???p</h2>
      <span style="color:#FFFFFF"><?php echo $ktra ?></span>
        <form action="" method="POST" name="dang-ky">
        <input type="text" name="username" placeholder="T??n ????ng nh???p" />
        <input type="password" name="password" placeholder="M???t kh???u" />
        <a herf="dangki.php"><input type="submit" name="submit" value="????ng nh???p" /></a>
        <a href="dangki.php">????ng k??</a>
        </form>

    </div>
    </body>
</html>