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

$sql = "SELECT * FROM milk_factory order by datetime DESC";
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
            localStorage.clickcount = Number(locปalStorage.clickcount)+1;
        } else {
            localStorage.clickcount = 1;
        }
        document.getElementById("result_milk").innerHTML = "" + localStorage.clickcount;
    } else {
        document.getElementById("result_milk").innerHTML = "Sorry, your browser does not support web storage...";
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
                <div class="fill" style="background-image:url('http://www.mx7.com/i/9b7/Mh1Y6x.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Milk Factory</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://www.mx7.com/i/b2a/m3ry31.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Milk Factory</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://www.mx7.com/i/ba6/ZrLqY0.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Milk Factory</h2>
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
                <h1 class="page-header">Milk Factory
                    <small>Dessert&Restaurant</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
            <!-- content -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;คาเฟ่สุดแนว บรรยากาศน่านั่ง ถ่ายรูปสวย ซึ่งหวานหวานจะพาไปรู้จัก นั่นก็คือร้าน Milk Factory แค่ชื่อก็น่าไปแล้ว อ่ะๆๆหวานหวานอยากจะบอกว่าร้านนี้มีสองชั้นด้วยน้าาา แถมยังเป็นร้านกระจกที่มองออกไปข้างนอกได้ด้วย ชักจะอยากเห็นกันแล้วใช่ไหมคะ แต่ช้าก่อนเรามาพูดถึงเรื่องอาหารกันก่อนดีกว่า ชื่อร้านถึงจะบอกว่าเป็นร้านนมแต่ว่าก็มีอาหารจานหลักขายด้วยนะะ ของหวานก็มีด้วย ถ้าจะให้พูดถึงรสชาติแล้ว หวานหวานแนะนำให้มาโดนด้วยตัวเองเลยย ไม่ผิดหวังแน่นอนนน
</p>
            <!-- picture 1 -->
            <br>
            <p align="center"><a href="https://www.img.in.th/images/8bf58330da6f927a89e10dc92a732223.jpg"><img src="https://www.img.in.th/images/8bf58330da6f927a89e10dc92a732223.jpg" height="90%" width="90%"></a>
            <!-- picture 2 -->
            <p align="center"><a href="https://www.img.in.th/images/35b292494dcfea72459cdb03addbfe62.jpg"><img src="https://www.img.in.th/images/35b292494dcfea72459cdb03addbfe62.jpg" height="90%" width="90%"></a>
            <!-- picture 3 -->
            <p align="center"><a href="https://www.img.in.th/images/5c9a7b445e4b582c79303eb9de4d81d8.jpg"><img src="https://www.img.in.th/images/5c9a7b445e4b582c79303eb9de4d81d8.jpg" height="90%" width="90%"></a>
            <!-- picture 4 -->
            <p align="center"><a href="https://www.img.in.th/images/0ec8efd0c6a98f02409c593837571c13.jpg"><img src="https://www.img.in.th/images/0ec8efd0c6a98f02409c593837571c13.jpg" height="90%" width="90%"></a>
            <!-- picture 5 -->
            <p align="center"><a href="https://www.img.in.th/images/ae2008d87116d45c0af5c27c6f6a2b54.jpg"><img src="https://www.img.in.th/images/ae2008d87116d45c0af5c27c6f6a2b54.jpg" height="90%" width="90%"></a>
            <!-- picture 6 -->
            <p align="center"><a href="https://www.img.in.th/images/730c10610648453288013e45af8fb641.jpg"><img src="https://www.img.in.th/images/730c10610648453288013e45af8fb641.jpg" height="90%" width="90%"></a>
            <!-- picture 7 -->
            <p align="center"><a href="https://www.img.in.th/images/3fbb34433bb9ac540193e23615627853.jpg"><img src="https://www.img.in.th/images/3fbb34433bb9ac540193e23615627853.jpg" height="90%" width="90%"></a>
            <!-- picture 8 -->
            <p align="center"><a href="https://www.img.in.th/images/fce2a3397198882215573352a4b5b22f.jpg"><img src="https://www.img.in.th/images/fce2a3397198882215573352a4b5b22f.jpg" height="90%" width="90%"></a>
            <!-- picture 9 -->
            <p align="center"><a href="https://www.img.in.th/images/d557683e3db132967289b9dbbd0dc867.jpg"><img src="https://www.img.in.th/images/d557683e3db132967289b9dbbd0dc867.jpg" height="90%" width="90%"></a>
            

            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>

                <!-- click like -->
                <!-- <p><button type="submit" class="btn btn-danger btn-xs" onclick="clickCounter()">
                <span class="glyphicon glyphicon-heart">LIKE</span></button>
                <span id="result_milk"></span></p> -->

                    Milk Factory<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: 086-5551775</p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>:  Monday - Sunday : 5.00P.M - 1.00A.M</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/MilkFactoryBKK/"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                </ul>
                <!-- Embedded Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.846493343287!2d100.76360351492731!3d13.727742001548929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d66527be15b17%3A0xbca527fc93093de3!2sMilk+Factory!5e0!3m2!1sen!2sth!4v1478587827474" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>-Comment-</h3>
                <form role="form" action = "comment_milkfactory.php" method="post">

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


</script>

</body>

</html>
