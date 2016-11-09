<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "whanwhan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM timber order by datetime DESC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Whan Whan</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Import font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Kanit');
    </style>

    <!-- W3 School -->
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- for count like -->
<!-- <script>
function clickCounter() {
    if(typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
            localStorage.clickcount = Number(localStorage.clickcount)+1;
        } else {
            localStorage.clickcount = 1;
        }
        document.getElementById("result_timber").innerHTML = "" + localStorage.clickcount;
    } else {
        document.getElementById("result_timber").innerHTML = "Sorry, your browser does not support web storage...";
    }
}
</script> -->

<style>
      body {
      font-family: 'Kanit', sans-serif;
      color: black;
    }
    h1, h3 {
      font-family: 'Kanit', sans-serif;
      color: black;
    }
    a:link {
    color: black;
    background-color: transparent;
    text-decoration: none;
    }
    }
    a:hover {
    color: black;
    background-color: transparent;
    text-decoration: underline;
    }
    a:active {
    color: gray;
    background-color: transparent;
    text-decoration: underline;
    }
</style>

</head>

<body>

<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-left-align w3-large w3-black">
    <a href="javascript:void(0);" onclick="openNav()">
        <i class="w3-hide-medium w3-hide-large w3-hover-black fa fa-bars w3-black w3-display-right w3-margin-right"></i>
    </a>
 <li>
    <a href="index.html" class="w3-large w3-margin-left w3-medium w3-left w3-hover-white w3-text-white w3-padding-12"><b>WH</b> WhanWhan</a>
  </li>
   <li class="w3-right w3-small">
      <a href="milkfactory.php" class="w3-left" style="margin-top: 7px">milk factory</a>
      <a href="timber.php" class="w3-left" style="margin-top: 7px">timber</a>
      <a href="atladkrabang.php" class="w3-left" style="margin-top: 7px">ณ ลาดกระบัง</a>
      <a href="lamun.php" class="w3-left" style="margin-top: 7px">ละมุน</a>
      <a href="bancha.php" class="w3-left" style="margin-top: 7px">สถานีบ้านชา</a>
                        <!-- search box -->
                        <form class="navbar-form navbar-form-sm navbar-right w3-left w3-margin-right w3-hide-medium" method=GET action="http://www.google.co.th/search">
                            <div class="form-group form-group-sm">
                              <input type="text" name=q class="form-control" placeholder="Search" value="">
                            </div>
                            <button type="submit" class="btn btn-default btn-sm">
                                <span class="fa fa-search" aria-hidden="true"></span>
                            </button>
                        </form>
                    </li>
 </ul>
</div>


    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://www.mx7.com/i/d88/aJMtkm.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Timber Cafe</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://www.mx7.com/i/1e1/H6d4ew.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Timber Cafe</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://www.mx7.com/i/c16/6KiLfP.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Timber Cafe</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Timber Cafe
                    <small>Thailand</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
            <!-- content -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันนี้หวานหวานจะมาแนะนำร้านคาเฟ่ชิคๆชิลๆน่านั่ง แถวลาดกระบังให้กับทุกคนกันค่ะ นั่นก็คือออออออออ ร้านTimber Cafe ร้านที่เด็กลาดกระบังต้องรู้จักกันแน่นอน(ถึงร้านจะอยู่ลึกไปหน่อยก็ตาม) ซึ่งร้านนี้เป็นคาเฟ่ที่มีทั้งอาหารจานหลักและของหวาน นอกจากนี้ยังมีของเล่นให้เล่นระหว่างรออาหารด้วย โดยการสั่งอาหารของที่นี่นั้นเมื่อสั่งเสร็จ พนักงานจะให้เครื่องกลมๆสีดำ ขนาดเท่าฝ่ามือมาให้ เมื่ออาหารพร้อมเสิร์ฟ เครื่องจะสั่นให้ไปรับอาหารที่เคาท์เตอร์  ซึ่งราคาอาหารนั้นก็จัดอยู่ในระดับกลางๆ ส่วนรสชาติก็ต้องบอกให้ทุกคนมาลองดูเองนะคะ แต่สำหรับหวานหวานแล้ว อร่อยถูกปากมากๆค่า</p>
            <!-- picture 1 -->
            <br>
            <p align="center"><a href="http://www.mx7.com/i/983/dXJ5dK.jpg"><img src="http://www.mx7.com/i/983/dXJ5dK.jpg" height="90%" width="90%"></a>
            <!-- picture 2 -->
            <p align="center"><a href="http://www.mx7.com/i/ce7/fJaUup.jpg"><img src="http://www.mx7.com/i/ce7/fJaUup.jpg" height="90%" width="90%"></a>
            <!-- picture 3 -->
            <p align="center"><a href="http://www.mx7.com/i/bff/ph10SE.jpg"><img src="http://www.mx7.com/i/bff/ph10SE.jpg" height="90%" width="90%"></a>
            <!-- picture 4 -->
            <p align="center"><a href="http://www.mx7.com/i/182/9xmZ5c.jpg"><img src="http://www.mx7.com/i/182/9xmZ5c.jpg" height="90%" width="90%"></a>
            <!-- picture 5 -->
            <p align="center"><a href="http://www.mx7.com/i/d5d/gTcBVE.jpg"><img src="http://www.mx7.com/i/d5d/gTcBVE.jpg" height="90%" width="90%"></a>
            <!-- picture 6 -->
            <p align="center"><a href="http://www.mx7.com/i/9ed/0IsXg0.jpg"><img src="http://www.mx7.com/i/9ed/0IsXg0.jpg" height="90%" width="90%"></a>
            <!-- picture 7 -->
            <p align="center"><a href="http://www.mx7.com/i/d48/RUEA4B.jpg"><img src="http://www.mx7.com/i/d48/RUEA4B.jpg" height="90%" width="90%"></a>
            <!-- picture 8 -->
            <p align="center"><a href="http://www.mx7.com/i/192/UgUxbj.jpg"><img src="http://www.mx7.com/i/192/UgUxbj.jpg" height="90%" width="90%"></a>
            <!-- picture 9 -->
            <p align="center"><a href="http://www.mx7.com/i/cff/Sr8oKv.jpg"><img src="http://www.mx7.com/i/cff/Sr8oKv.jpg" height="90%" width="90%"></a>

            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                <!-- click like -->
                <!-- <p><button type="submit" class="btn btn-danger btn-xs" onclick="clickCounter()">
                <span class="glyphicon glyphicon-heart">LIKE</span></button>
                <span id="result_timber"></span></p> -->

                    Timber Cafe Thailand<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: 089-2027882</p>
                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email">M</abbr>: timbercafe@hotmail.com</p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Saturday: 11.00A.M - 11.00P.M</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/timbercafethailand"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                </ul>
                <!-- Embedded Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.8584043213637!2d100.76397161492731!3d13.727021201565414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d665281e02d7d%3A0x77567d8428d890ef!2sTimber+cafe+thailand!5e0!3m2!1sth!2sth!4v1477997840172" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>-Comment-</h3>
                <form role="form" action = "comment_timber.php" method="post">

                    <div class="form-group">
                      <label for="NameForm">
                        Name:
                      </label>
                      <input name="name" type="text" class="form-control" id="NameForm">
                    </div>

                    <div class="form-group">
                      <label for="ContentForm">
                          Message:
                      </label>
                      <textarea  name="comment" rows="10" cols="100" class="form-control" id="comment" style="resize:none"></textarea>

                    </div>

                    <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                </form>
                <br>
                <!-- update comment from datqbase -->
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<div class="jumbotron">';
                            echo '<h4>';
                            echo $row["name"];
                            echo '</h4>'.$row["datetime"];
                            echo '<p>';
                            echo '________________________________________________';
                            echo '<h6>';
                            echo $row["comment"];
                            echo '</h6>';
                            echo '</p>';
                            echo '</div>';
                        }
                    }
                        $conn->close(); 
                ?>
            </div>
        </div>

        <hr>

    </div>
            <!-- Footer -->
  <div class="w3-container w3-padding-12">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12"></h3>
    <b><u><a href="#top">กลับสู่ด้านบน ↑</a></b></u>
    <p><br>Copyright © WhanWhan</p>
  </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    var slideIndex = 1;
    showDivs(slideIndex);
    function plusDivs(n) {
      showDivs(slideIndex += n);
    }
    function currentDiv(n) {
      showDivs(slideIndex = n);
    }
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " w3-white";
    }
  </script>

</body>

</html>
