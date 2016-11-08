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

    <title>WhanWhan</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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

</head>

<body>

    <!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar w3-black w3-wide w3-padding-8">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-dropdown-click w3-hover-white w3-small w3-white" href="javascript:void(0);" onclick="myFunction()" title="Menu">
      <i class="fa fa-bars"></i></a>
    </li>

    <li>
      <a href="index.html" class="w3-margin-left"><b>WH</b> WhanWhan</a>
    </li>
    <!-- Float links to the right. Hide them on small screens -->
    <li class="w3-right w3-small">
      <a href="milkfactory.php" class="w3-left">milk factory</a>
      <a href="timber.php" class="w3-left">timber</a>
      <a href="atladkrabang.php" class="w3-left">ณ ลาดกระบัง</a>
      <a href="lamun.php" class="w3-left">ละมุน</a>
      <a href="bancha.php" class="w3-left w3-margin-right">สถานีบ้านชา</a>
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
                <div class="fill" src="whanwhan/img/naladkrabang/nalad1.jpg"></div>
                <div class="carousel-caption">
                    <h2>Timber Cafe</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://f.ptcdn.info/784/037/000/nyglzjn6vqbmNQGFHKh-o.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Timber Cafe</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://f.ptcdn.info/785/037/000/nygmcrn80kiz521XL09-o.jpg');"></div>
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
            <p>&nbsp;&nbsp;&nbsp;&nbsp;วันนี้หมูพริ้วจะพาทุกคนไปนั่งชิคค์ๆชิลล์ๆที่คาเฟ่ต์ฮิปๆย่านลาดกระบังด้วยกันนะฮะ
ร้านนี้มีพิกัดอยู่ในซอยฉลองกรุง1 ตรงเข้าไปข้ามสะพานตรงไปอีกอยู่ซ้ายมืออยู่ตรง"ตลาดนัดเทคโน"ด้านในสุด (พิกัดเอามาจากเพจร้านนะฮะ พิกัดเดิมผมเข้าใจผิดเดี๋ยวจะหลงกันฮะ ขอโทษด้วยนะฮะ) 
ซึ่งอยู่ใกล้ๆทางรถไฟสถานีเจ้าคุณทหารนั่นเองจ้า ถ้าไปไม่ถูกลองแวะถามคนแถวนั้นได้ 
เด็กลาดกระบังน่าจะรู้จักซอยนี้กันดี เพราะของกินอร่อยๆเยอะมากกกกกกกกก
โดยคาเฟ่ต์นี้จะมีขายทั้งอาหารจานเดียว เครื่องดื่ม ของทานเล่น และขนมหวานมากมายหลายชนิดเลยด้วย เริ่ดมากเลยอ่ะแก</p>
            <!-- picture row1 -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://f.ptcdn.info/784/037/000/nyglx2tjtsqsSm6rQGe-o.jpg"><img src="http://f.ptcdn.info/784/037/000/nyglx2tjtsqsSm6rQGe-o.jpg" height="30%" width="30%"></a>
            &nbsp;&nbsp;&nbsp;<a href="http://f.ptcdn.info/784/037/000/nyglzjn6vqbmNQGFHKh-o.jpg"><img src="http://f.ptcdn.info/784/037/000/nyglzjn6vqbmNQGFHKh-o.jpg" height="30%" width="30%"></a>
            &nbsp;&nbsp;&nbsp;<a href="http://f.ptcdn.info/784/037/000/nyglzwoyph4n7WMb16r-o.jpg"><img src="http://f.ptcdn.info/784/037/000/nyglzwoyph4n7WMb16r-o.jpg" height="30%" width="30%"></a></p>
            <!-- picture row2 -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://f.ptcdn.info/784/037/000/nyglx2tjtsqsSm6rQGe-o.jpg"><img src="http://f.ptcdn.info/784/037/000/nyglx2tjtsqsSm6rQGe-o.jpg" height="30%" width="30%"></a>
            &nbsp;&nbsp;&nbsp;<a href="http://f.ptcdn.info/784/037/000/nyglzjn6vqbmNQGFHKh-o.jpg"><img src="http://f.ptcdn.info/784/037/000/nyglzjn6vqbmNQGFHKh-o.jpg" height="30%" width="30%"></a>
            &nbsp;&nbsp;&nbsp;<a href="http://f.ptcdn.info/784/037/000/nyglzwoyph4n7WMb16r-o.jpg"><img src="http://f.ptcdn.info/784/037/000/nyglzwoyph4n7WMb16r-o.jpg" height="30%" width="30%"></a></p>
            <!-- picture row3 -->
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://f.ptcdn.info/784/037/000/nyglx2tjtsqsSm6rQGe-o.jpg"><img src="http://f.ptcdn.info/784/037/000/nyglx2tjtsqsSm6rQGe-o.jpg" height="30%" width="30%"></a>
            &nbsp;&nbsp;&nbsp;<a href="http://f.ptcdn.info/784/037/000/nyglzjn6vqbmNQGFHKh-o.jpg"><img src="http://f.ptcdn.info/784/037/000/nyglzjn6vqbmNQGFHKh-o.jpg" height="30%" width="30%"></a>
            &nbsp;&nbsp;&nbsp;<a href="http://f.ptcdn.info/784/037/000/nyglzwoyph4n7WMb16r-o.jpg"><img src="http://f.ptcdn.info/784/037/000/nyglzwoyph4n7WMb16r-o.jpg" height="30%" width="30%"></a></p>

            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    <span class="rating">
        <input type="radio" class="rating-input"
            id="rating-input-1-5" name="rating-input-1">
        <label for="rating-input-1-5" class="rating-star"></label>
        <input type="radio" class="rating-input"
            id="rating-input-1-4" name="rating-input-1">
        <label for="rating-input-1-4" class="rating-star"></label>
        <input type="radio" class="rating-input"
            id="rating-input-1-3" name="rating-input-1">
        <label for="rating-input-1-3" class="rating-star"></label>
        <input type="radio" class="rating-input"
            id="rating-input-1-2" name="rating-input-1">
        <label for="rating-input-1-2" class="rating-star"></label>
        <input type="radio" class="rating-input"
            id="rating-input-1-1" name="rating-input-1">
        <label for="rating-input-1-1" class="rating-star"></label>
    </span><br>
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
                <form role="form" action = "comment.php" method="post">

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
                    <!-- <form role="form" action="comment.php" method="post">
                        <div class="form-group">
                            <label for="NameForm">
                                Name :
                            </label>
                            <input name="name" type="text" class="form-control" id="NameForm">
                        </div>

                        <div class="form-group">
                            <label for="ContentForm">
                                Message :
                            </label>
                            <textarea rows="10" cols="100" class="form-control" id="comment" style="resize:none"></textarea>
                        </div>

                    <button type="submit" class="btn btn-info">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                </form> -->
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
                 <!--    <div class="control-group form-group">
                        <div class="controls">
                            <label>Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div> -->
                    <!-- For success/fail messages -->
                    <!-- <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button> 
                </form>-->
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; "KANOMWANWAN"</p>
                </div>
            </div>
        </footer>

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
