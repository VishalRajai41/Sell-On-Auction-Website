<?php
  
  
  include("connect.php"); 
  extract($_REQUEST);

  if(empty($_SESSION['user']))
    header("location:../user/index.php");
  
  
  $usid=$_SESSION['uid'];
  $result=mysqli_query($con,"select a.proname,a.propic,b.amount,b.date from selling a,auction_amount b where a.sid=b.sid and b.uid='$usid'") or die(mysqli_error($con));


?>
<script>

function search()
{

    if(document.getElementById("txt1").value=="")
        alert("Enter itemname to search")
   else
        frm.action="table/search.php"
}

</script>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Auction Your Antique</title>

  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Alacrity Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script>
    addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar() { window.scrollTo(0, 1); }
  </script>
  <!--//meta tags ends here-->

  <!--booststrap-->

  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
  <!--//booststrap end-->

  <!-- font-awesome icons -->
  <link href="../css/font-awesome.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <!--stylesheets-->
  <link href="../css/style.css" rel='stylesheet' type='text/css' media="all">
  <!--//stylesheets-->
  <link href="..///fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">


<!--table link start -->

  <!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="../table/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../table/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../table/vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../table/css/util.css">
  <link rel="stylesheet" type="text/css" href="../table/css/main.css">
<!--===============================================================================================-->
      <!--table link  -->
<style>

ul {
  list-style-type: none;
 background-color: #36304a;
  padding: 0;
  padding-right: 5%; 
  overflow: hidden;
  font-size: 16px;

}

li {
  float: right;
}

li a {
  display: block;
  color: #f39406;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
body{
 
  width: 100%;
  height:auto;
  overflow-x: hidden;
  background-image: url("slide3.jpg");
  background-size:cover;
  background-attachment: fixed;
  background-repeat: no-repeat;

}
table{
  box-shadow: 0 0 10px black,0 0 10px black,0 5px 1px white;
  z-index: 1;
  width: 60%;
}

</style>  
</head>

<body >  
    <nav><!--  header--> 
      <ul>
      <li><a href="logout.php" >Logout</a></li>
      <li><a href="selling.php">Sell</a></li>
      <li><a href="outdate.php">Outdate Item</a></li>
      <li><a href="update.php">Edit Item</a></li>
      <li><a href="userauction.php">Your Auction</a></li>
      <li><a class="active" href="participate.php">You've Participate</a></li>
      </ul>
    </nav>
    <div class="clearfix"> </div>
  </div>
  
 <form method=post name="frm" enctype="multipart/form-data">
  <div class="limiter">
    <div class="container-table100" >
      <div class="wrap-table100">
        <div class="table100 ver1 m-b-110">
          <center><table data-vertable="ver1">
            <thead>    
                <tr class="row100 head">
                  <th class="column100 column1" colspan=5 align="center" data-column="column1"><CENTER><h3>You Have Participate In</h3></CENTER></th>
                </tr>
                <tr class="row100 head">
                <th class="column100 column2" data-column="column3">Product Name</th>
                <th class="column100 column3" data-column="column2">Product Image</th>
                <th class="column100 column4" data-column="column5">Product Amount</th>
                <th class="column100 column5" data-column="column4">Date</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                  while($row=mysqli_fetch_array($result))
                {
                  echo "<tr class='row100'>";
                  echo "<td class='column100 column1' data-column='column1'>$row[0]</td>";
                  echo "<td class='column100 column2' data-column='column1'><img src='$row[1]' height=150px width=200px></td>";
                  
                  echo "<td class='column100 column3' data-column='column1'>$row[2]</td>";
                  echo "<td class='column100 column4' data-column='olumn1'>$row[3]</td>";
                  echo "<tr>";
                }
                


              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<!--===============================================================================================-->  
  <script src="../table/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="../table/vendor/bootstrap/js/popper.js"></script>
  <script src="../table/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="../table/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="../table/js/main.js"></script>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <footer>
    <div class="container">
      <div class="col-md-3 wls-bottom-head">
        <h4><a href="index.php"></a></h4>
      </div>
      <div class="col-md-6 header-side">
        <p>© Flash@2018 . All Rights Reserved | Design by Satyajeet & Nandlal </a></p>
      </div>
      <div class="col-md-3 header-side">
        <div class="buttom-social-grids">

          <!--<ul>
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#"><span class="fa fa-rss"></span></a></li>
            <li><a href="#"><span class="fa fa-vk"></span></a></li>
          </ul>-->
        </div>
      </div>
    </div>
  </footer>
  <!-- //footer  -->

  <!--js working-->
  <script src='../js/jquery-2.2.3.min.js'></script>

  <!-- //js  working-->
  <script src="../js/responsiveslides.min.js"></script>

  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 900,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
  <!--// banner-->
  <!-- gallery-pop-up -->
  <script src="js/jquery.chocolat.js"></script>
  <link rel="stylesheet" href="../css/chocolat.css" type="text/css" media="screen">
  <!--light-box-files -->
  <script>
    $(function () {
      $('.agileinfo_portfolio_grid a').Chocolat();
    });
  </script>
  <!-- //gallery-pop-up -->
  <!-- start-smoth-scrolling -->
  <script src="../js/move-top.js"></script>
  <script src="../js/easing.js"></script>
  <script>
    jQuery(document).ready(function ($) {
      $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
      });
    });
  </script>
  <!-- start-smoth-scrolling -->

  <!-- here stars scrolling icon -->
  <script>
    $(document).ready(function () {
      /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
      */

      $().UItoTop({ easingType: 'easeOutQuart' });

    });
  </script>
  <!-- //here ends scrolling icon -->

  <!--bootstrap-->
  <script src="../js/bootstrap.js"></script>
  <!--// bootstrap-->
  </form>
</body>

</html>