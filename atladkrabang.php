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

$sql = "SELECT * FROM atladkrabang order by datetime DESC";
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
        if (sessionStorage.clickcount) {
            sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
        } else {
            sessionStorage.clickcount = 1;
        }
        document.getElementById("result_at").innerHTML = "" + sessionStorage.clickcount;
    } else {
        document.getElementById("result_at").innerHTML = "Sorry, your browser does not support web storage...";
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
                <div class="fill" style="background-image:url('http://www.mx7.com/i/98b/qEnq4n.jpg')"></div>
                <div class="carousel-caption">
                    <h2>ณ ลาดกระบัง</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://www.mx7.com/i/cda/XKaMEM.jpg');"></div>
                <div class="carousel-caption">
                    <h2>ณ ลาดกระบัง</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://www.mx7.com/i/d24/QxjlPu.jpg');"></div>
                <div class="carousel-caption">
                    <h2>ณ ลาดกระบัง</h2>
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
                <h1 class="page-header">ณ ลาดกระบัง
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
            <!-- content -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;วันนี้หวานๆจะมาแนะนำคาเฟ่ริมคลองบรยากาศดีเหมาะกับชาวฮิปสเตอร์ทั้งหลาย คาเฟ่ริมคลองแถบชานเมืองลาดกระบังที่ดัดแปลงร้านมาจากปั๊มน้ำมันเก่าของชาวเรือมาเป็นพื้นที่ค่าเฟ่เครื่องดื่มขนาดเล็กๆในเรือนแถวไม้ตลาดเก่าหัวตะเข้ ริมคลองใหญ่สายประวัติศาสตร์ย่านชานเมือง คาเฟ่บรรยาศสบายๆที่มีเรือแล่นผ่านหน้าร้านเหมาะกับการกินขนมเพลินๆในช่วงเวลาพักผ่อนจริงๆค่ะ
</p>
            <!-- picture 1 -->
            <br>
            <p align="center"><a href="https://www.img.in.th/images/e85feb59b74ba7008f25167397fabc48.jpg"><img src="https://www.img.in.th/images/e85feb59b74ba7008f25167397fabc48.jpg" height="90%" width="90%"></a>
            <!-- picture 2 -->
            <p align="center"><a href="https://www.img.in.th/images/41162087f21d0cc1e2e7fceafac6f9d8.jpg"><img src="https://www.img.in.th/images/41162087f21d0cc1e2e7fceafac6f9d8.jpg" height="90%" width="90%"></a>
            <!-- picture 3 -->
            <p align="center"><a href="https://www.img.in.th/images/b7f3bdc3e0735731f135916a419957e1.jpg"><img src="https://www.img.in.th/images/b7f3bdc3e0735731f135916a419957e1.jpg" height="90%" width="90%"></a>
            <!-- picture 4 -->
            <p align="center"><a href="https://www.img.in.th/images/a4d98491cfbb8276d1c01c48661437f9.jpg"><img src="https://www.img.in.th/images/a4d98491cfbb8276d1c01c48661437f9.jpg" height="90%" width="90%"></a>
            <!-- picture 5 -->
            <p align="center"><a href="http://www.mx7.com/i/d14/MhRUoz.jpg"><img src="http://www.mx7.com/i/d14/MhRUoz.jpg" height="90%" width="90%"></a>
            <!-- picture 6 -->
            <p align="center"><a href="http://www.mx7.com/i/c71/4l37p8.jpg"><img src="http://www.mx7.com/i/c71/4l37p8.jpg" height="90%" width="90%"></a>
            <!-- picture 7 -->
            <p align="center"><a href="http://www.mx7.com/i/16f/YKtInR.jpg"><img src="http://www.mx7.com/i/16f/YKtInR.jpg" height="90%" width="90%"></a>
            <!-- picture 8 -->
            <p align="center"><a href="http://www.mx7.com/i/ca7/I3U08z.jpg"><img src="http://www.mx7.com/i/ca7/I3U08z.jpg" height="90%" width="90%"></a>
            <!-- picture 9 -->
            <p align="center"><a href="http://www.mx7.com/i/b89/GDPuo5.jpg"><img src="http://www.mx7.com/i/b89/GDPuo5.jpg" height="90%" width="90%"></a>
            
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>

                <!-- click like -->
                <!-- <p><button type="submit" class="btn btn-danger btn-xs" onclick="clickCounter()">
                <span class="glyphicon glyphicon-heart">LIKE</span></button>
                <span id="result_at"></span></p> -->

                    ณ ลาดกระบัง<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: 086-0658422</p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Tuesday: 7.00A.M - 7.00P.M <br>
                            Wednesday - Sunday: 10.00A.M - 7.00P.M
</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/nalatkrabang/"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                </ul>
                <!-- Embedded Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.902623913583!2d100.7875013149273!3d13.724344901626528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d662d44481a89%3A0x81e7851b0c18ce51!2z4LiTIOC4peC4suC4lOC4geC4o-C4sOC4muC4seC4hw!5e0!3m2!1sen!2sth!4v1478587726234" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>-Comment-</h3>
                <form role="form" action = "comment_atladkrabang.php" method="post">

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
            </div>

        </div>
        <!-- /.row -->

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
