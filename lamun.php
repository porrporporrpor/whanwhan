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

$sql = "SELECT * FROM lamun order by datetime DESC";
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
        document.getElementById("result_lamun").innerHTML = "" + sessionStorage.clickcount;
    } else {
        document.getElementById("result_lamun").innerHTML = "Sorry, your browser does not support web storage...";
    }
}
</script> -->

<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>

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
                <div class="fill" style="background-image:url('https://www.img.in.th/images/334b96a837a6904e7bf57e0226ab1a2d.jpg');"></div>
                <div class="carousel-caption">
                    <h2>ละมุน</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('https://www.img.in.th/images/a3502757610ccca6f39459073c7ca442.jpg');"></div>
                <div class="carousel-caption">
                    <h2>ละมุน</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('https://www.img.in.th/images/6c4ebf1823931e515e9ce295bf18541c.jpg');"></div>
                <div class="carousel-caption">
                    <h2>ละมุน</h2>
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
                <h1 class="page-header">ละมุน
                <small>Home made bakery</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
            <!-- content -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;มาถึงร้านเค้กน่ารัก รสชาติละมุนละไม กับละมุนที่มีเค้กหลากหลายรสชาติให้เลือกสรร ไม่ว่าจะเป็นชีสเค้ก บราวนี่ บานอฟฟี่ และอื่นๆ อีกมากมายให้ได้ลิ้มรสกัน วันนี้หวานหวานพึ่งได้ลองมา ละมุนสมชื่อจริงๆค่ะ อยากให้ทุกๆคน ได้ไปลองกัน นอกจากจะมีเค้กแล้วยังมีไอศครีมหลากรส อีกด้วย อย่าลืมไปลองนะคะ แล้วจะติดใจเหมือนหวานหวานเลยค่าาาา <br>ปล. แต่อย่ากินเยอะนะคะ เดี๋ยวอ้วนเอาน้าาาาา</p>
            <!-- all picture -->
            <!-- pic1 -->
            <br>
            <p aling="center"><a href="https://www.img.in.th/images/dd27723407ec3bad6b1afde7c238cf50.jpg"><img src="https://www.img.in.th/images/dd27723407ec3bad6b1afde7c238cf50.jpg" height="90%" width="90%"></a>
            <!-- pic2 -->
            <p aling="center"><a href="https://www.img.in.th/images/65db34ee665fd3dca39c91a13417bc39.jpg"><img src="" height="90%" width="90%"></a>
            <!-- pic3 -->
            <p aling="center"><a href="https://www.img.in.th/images/955a8bf8944bb1e3cd0b401a507a084f.jpg"><img src="https://www.img.in.th/images/955a8bf8944bb1e3cd0b401a507a084f.jpg" height="90%" width="90%"></a>
            <!-- pic4 -->
            <p aling="center"><a href="https://www.img.in.th/images/b5423c2dfa1c032c087dfaea3de9ff05.jpg"><img src="https://www.img.in.th/images/b5423c2dfa1c032c087dfaea3de9ff05.jpg" height="90%" width="90%"></a>
            <!-- pic5 -->
            <p aling="center"><a href="https://www.img.in.th/images/9d7f45353257bc2de5c76058abfa84e7.jpg"><img src="https://www.img.in.th/images/9d7f45353257bc2de5c76058abfa84e7.jpg" height="90%" width="90%"></a>
            <!-- pic6 -->
            <p aling="center"><a href="https://www.img.in.th/images/e88f7962fb982ff8e304b05d3abb763e.jpg"><img src="https://www.img.in.th/images/e88f7962fb982ff8e304b05d3abb763e.jpg" height="90%" width="90%"></a>
            <!-- pic7 -->
            <p aling="center"><a href="https://www.img.in.th/images/d0ab0700598b5e5b5dd6ac3d132cfc68.jpg"><img src="https://www.img.in.th/images/d0ab0700598b5e5b5dd6ac3d132cfc68.jpg" height="90%" width="90%"></a>
            <!-- pic8 -->
            <p aling="center"><a href="https://www.img.in.th/images/6f38f7004621d4fdb128a964bd2fe73e.jpg"><img src="https://www.img.in.th/images/6f38f7004621d4fdb128a964bd2fe73e.jpg" height="90%" width="90%"></a>
            <!-- pic9 -->
            <p aling="center"><a href="https://www.img.in.th/images/3eeb4436f86aa30d731f5e7b77aa22d7.jpg"><img src="https://www.img.in.th/images/3eeb4436f86aa30d731f5e7b77aa22d7.jpg" height="90%" width="90%"></a>

            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>

                <!-- click like -->
                <!-- <p><button type="submit" class="btn btn-danger btn-xs" onclick="clickCounter()">
                <span class="glyphicon glyphicon-heart">LIKE</span></button>
                <span id="result_lamun"></span></p> -->
                    ละมุน<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: 086-8820234</p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Sunday: 10.00A.M - 8.00P.M</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/lamoon.bakery"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                </ul>
                <!-- Embedded Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.9320592980803!2d100.7781687149273!3d13.72256310166724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d67cb205fb74d%3A0x8ae31bcee33a29b4!2z4Lil4Liw4Lih4Li44LiZIChMYW1vb24p!5e0!3m2!1sen!2sth!4v1478587917967" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>-Comment-</h3>
                <form role="form" action = "comment_lamun.php" method="post">

                    <div class="form-group">
                      <label for="NameForm">
                        Name:
                      </label>
                      <input name="name" type="text" class="form-control" id="NameForm" >
                    </div>

                    <div class="form-group">
                      <label for="ContentForm" >
                          Message:
                      </label>
                      <textarea  name="comment" rows="10" cols="100" class="form-control" id="comment" style="resize:none ;" ></textarea>

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
