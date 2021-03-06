<?php
ob_start();
session_start();
    include("connect.php");
    if(isset($_POST['submit'])){
         if(isset($_POST['name']) && isset($_POST['password']) ){
             $name = $_POST['name'];
             $password = $_POST['password'];
             $sql = "SELECT * FROM user WHERE name = '$name' AND password='$password'";
             $login = mysqli_query($conn, $sql);
              if(mysqli_num_rows($login) == 1){
                $rowUser = mysqli_fetch_array($login);
                $_SESSION['id'] = $rowUser['id'];
                $_SESSION['name'] = $rowUser['name'];
                $_SESSION['password'] = $rowUser['password'];
            }
            else{
                echo "SAI TÀI KHOẢN HOẶC MẬT KHẨU";
            }

         }
    }
    if(isset($_POST['signout'])){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['password']);
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" href="css/hover.css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="main">
    <header>
        <div class="navigation wrapper">
            <a href="#">
                   <img src="images/personal%20logo.png" alt="">
               </a>
            <ul>
                <li><a href="index.php" class="hvr-underline-from-center">TRANG CHỦ</a></li>
                <li><a href="sanpham.php" class="hvr-underline-from-center">SẢN PHẨM</a></li>
                <li><a href="thongtin.php" class="hvr-underline-from-center">THÔNG TIN</a></li>
                <li><a href="chinhsua.php" class="hvr-underline-from-center">CHỈNH SỬA</a></li>
                <?php
                if(isset($_SESSION['id']))
                {
                ?>
                <form action="index.php" method="post" class="signout">
                    <?php echo "Hello ".$_SESSION['name'] ?><input type="submit" name="signout" value="ĐĂNG XUẤT" />
                </form>
                <?php
                }else{
                ?>
                    <li><a class="hvr-underline-from-center sign_in">ĐĂNG NHẬP</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </header>
    <div class="welcome_screen">
        <div class="welcome_word">
            <h3>LET'S FIND YOUR HAT</h3>
        </div>
        <div class="banner">
            <div class="banner_inside">
                <img src="images/banner_top.jpg" alt="">
            </div>
            <div class="banner_inside">
                <img src="images/banner_top2.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="list_product wrapper">
        <div class="hot">NEWS PRODUCT</div>
        <div class="list">
            <div class="item">
                <a href="#" class="hvr-grow-shadow">
                    <img src="images/hat.png" alt="">
                    <p class="name">BOSTON RED SOX FATHERS DAY 59FIFTY FITTED</p>
                    <p class="id">#BRS3214</p>
                    <p class="price">VND 1,200,00</p>
                </a>
            </div>
            <div class="item">
                <a href="#" class="hvr-grow-shadow">
                    <img src="images/hat1.png" alt="">
                    <p class="name">CHICAGO CUBS FATHERS DAY 59FIFTY FITTED</p>
                    <p class="id">#560683C</p>
                    <p class="price">VND 1,000,00</p>
                </a>
            </div>
            <div class="item">
                <a href="#" class="hvr-grow-shadow">
                    <img src="images/hat2.png" alt="">
                    <p class="name">HOUSTON ASTROS FATHERS DAY 59FIFTY FITTED</p>
                    <p class="id">#121178</p>
                    <p class="price">VND 1,100,00</p>
                </a>
            </div>
            <div class="item">
                <a href="#" class="hvr-grow-shadow">
                    <img src="images/hat3.png" alt="">
                    <p class="name">LOS ANGELES DODGERS FATHERS DAY 59FIFTY FITTED</p>
                    <p class="id">#M3310V</p>
                    <p class="price">VND 1,100,00</p>
                </a>
            </div>
            <div class="item">
                <a href="#" class="hvr-grow-shadow">
                    <img src="images/hat4.png" alt="">
                    <p class="name">NEW YORK YANKEES FATHERS DAY 59FIFTY FITTED</p>
                    <p class="id">#121186</p>
                    <p class="price">VND 1,100,00</p>
                </a>
            </div>
        </div>
    </div>
    <div class="banner_bot">
        <img src="images/banner_bot.jpg" alt="">
    </div>
    <div class="list_product wrapper">
        <div class="hot">HOTEST PRODUCT</div>
        <div class="list_bottom list owl-carousel owl-theme">
            <div class="item">
                <a href="#" class="hvr-grow-shadow">
                    <img src="images/hat.png" alt="">
                    <p class="name">BOSTON RED SOX FATHERS DAY 59FIFTY FITTED</p>
                    <p class="id">#BRS3214</p>
                    <p class="price">VND 1,200,00</p>
                </a>
            </div>
            <div class="item">
                <a href="#" class="hvr-grow-shadow">
                    <img src="images/hat1.png" alt="">
                    <p class="name">CHICAGO CUBS FATHERS DAY 59FIFTY FITTED</p>
                    <p class="id">#560683C</p>
                    <p class="price">VND 1,000,00</p>
                </a>
            </div>
            <div class="item">
                <a href="#" class="hvr-grow-shadow">
                    <img src="images/hat2.png" alt="">
                    <p class="name">HOUSTON ASTROS FATHERS DAY 59FIFTY FITTED</p>
                    <p class="id">#121178</p>
                    <p class="price">VND 1,100,00</p>
                </a>
            </div>
            <div class="item">
                <a href="#" class="hvr-grow-shadow">
                    <img src="images/hat3.png" alt="">
                    <p class="name">LOS ANGELES DODGERS FATHERS DAY 59FIFTY FITTED</p>
                    <p class="id">#M3310V</p>
                    <p class="price">VND 1,100,00</p>
                </a>
            </div>
            <div class="item">
                <a href="#" class="hvr-grow-shadow">
                    <img src="images/hat4.png" alt="">
                    <p class="name">NEW YORK YANKEES FATHERS DAY 59FIFTY FITTED</p>
                    <p class="id">#121186</p>
                    <p class="price">VND 1,100,00</p>
                </a>
            </div>
            <div class="item">
                <a href="#" class="hvr-grow-shadow">
                    <img src="images/hat1.png" alt="">
                    <p class="name">CHICAGO CUBS FATHERS DAY 59FIFTY FITTED</p>
                    <p class="id">#560683C</p>
                    <p class="price">VND 1,000,00</p>
                </a>
            </div>
            <div class="item">
                <a href="#" class="hvr-grow-shadow">
                    <img src="images/hat2.png" alt="">
                    <p class="name">HOUSTON ASTROS FATHERS DAY 59FIFTY FITTED</p>
                    <p class="id">#121178</p>
                    <p class="price">VND 1,100,00</p>
                </a>
            </div>
            <div class="item">
                <a href="#" class="hvr-grow-shadow">
                    <img src="images/hat3.png" alt="">
                    <p class="name">LOS ANGELES DODGERS FATHERS DAY 59FIFTY FITTED</p>
                    <p class="id">#M3310V</p>
                    <p class="price">VND 1,100,00</p>
                </a>
            </div>
            <div class="item">
                <a href="#" class="hvr-grow-shadow">
                    <img src="images/hat4.png" alt="">
                    <p class="name">NEW YORK YANKEES FATHERS DAY 59FIFTY FITTED</p>
                    <p class="id">#121186</p>
                    <p class="price">VND 1,100,00</p>
                </a>
            </div>
        </div>
    </div>
    <div class="banner_bot">
        <img src="images/banner_bot2.jpg" alt="">
    </div>
    <div class="coppyright">
        <div class="container">Copyrights@2018: TRAN VAN HUNG</div>
    </div>
    <div class="pop_up">
        <i class="fas fa-times exit"></i>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <label for="user">USER NAME:</label>
            <input type="text" id="user" name="name">
            <label for="pass">PASSWORD:</label>
            <input type="password" id="pass" name="password">
            <input type="submit" value="ĐĂNG NHẬP" name="submit">
        </form>
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.js"></script>
    <script src="jquery/script.js"></script>
</body>

</html>
