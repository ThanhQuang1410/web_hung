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
    <meta charset="UTF-8">
    <title>Thông tin</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="navigation wrapper">
            <a href="index.php">
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
    <div class="infor">
        <div class="container box_cv">
            <div class="row">
                <div class="col-md-4">
                    <div class="left">
                        <div class="avt">
                            <img src="images/avt.jpg" alt="">
                        </div>
                        <h4>CONTACT</h4>
                        <P><i class="fas fa-map-marker"></i>TP. HẢI PHÒNG</P>
                        <p><i class="fas fa-envelope"></i>ONEBLUE2360@GMAIL.COM</p>
                        <p><i class="fas fa-mobile"></i>01225122119</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="right">
                        <h1>TRAN VAN HUNG</h1>
                        <h4>BACK-END DEV</h4>
                        <div class="about">
                            <h3><i class="fas fa-briefcase"></i>EXPERIENCES</h3>
                            <div class="box_about">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-3">
                                        <b>2017-2018</b>
                                    </div>
                                    <div class="col-md-7">
                                        <b>VNPT COPR</b>
                                        <p>INTERN</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box_about">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-3">
                                        <b>2018-NOW</b>
                                    </div>
                                    <div class="col-md-7">
                                        <b>MAGENEST JSC</b>
                                        <p>INTERN</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about">
                            <h3><i class="fas fa-briefcase"></i>EDUCATION</h3>
                            <div class="box_about">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-3">
                                        <b>2017-2018</b>
                                    </div>
                                    <div class="col-md-7">
                                        <b>VNPT COPR</b>
                                        <p>INTERN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box_about">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-3">
                                        <b>2018-NOW</b>
                                    </div>
                                    <div class="col-md-7">
                                        <b>MAGENEST JSC</b>
                                        <p>INTERN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about">
                            <h3><i class="fas fa-briefcase"></i>SKILLS & EXPERTISE</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control">
                                        <div class="col-md-5">
                                            Photoshop
                                        </div>
                                        <div class="col-md-7">
                                            <div class="box_skill">
                                                <div class="inside" style="width: 65%"></div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row control">
                                        <div class="col-md-5">
                                            English
                                        </div>
                                        <div class="col-md-7">
                                            <div class="box_skill">
                                                <div class="inside" style="width: 77%"></div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row control">
                                        <div class="col-md-5">
                                            Frontend
                                        </div>
                                        <div class="col-md-7">
                                            <div class="box_skill">
                                                <div class="inside" style="width: 75%"></div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row control">
                                        <div class="col-md-5">
                                            Backend
                                        </div>
                                        <div class="col-md-7">
                                            <div class="box_skill">
                                                <div class="inside" style="width: 98%"></div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row control">
                                        <div class="col-md-5">
                                            Teamwork
                                        </div>
                                        <div class="col-md-7">
                                            <div class="box_skill">
                                                <div class="inside" style="width: 100%"></div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row control">
                                        <div class="col-md-5">
                                            Leadership
                                        </div>
                                        <div class="col-md-7">
                                            <div class="box_skill">
                                                <div class="inside" style="width: 95%"></div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
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
    <script src="jquery/script.js"></script>
</body>

</html>
