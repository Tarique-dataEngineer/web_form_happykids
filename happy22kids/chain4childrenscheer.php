<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "happykid_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from user_details";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

?>


<!DOCTYPE html>
<!--
Template Name: Sislaf
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->

<!-- Mirrored from happy22kids.uho.org.in/chain4childrenscheer.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Dec 2023 17:28:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <title>Chain-for-Children's-Cheer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <main class="hoc container clear">
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <div class="content font-big">
        <!-- ################################################################################################ -->
        <h2 class="heading font-x3"><b>
            <font color="#0000ff">Happy 2022, Happy for Kids Too</font>
          </b></h2>
      </div>
      <p>
        <a class="btn" href="index.html#stmt">Read the statement</a>
        <a class="btn" href="joinchain.html">Join the <b>
            <font color="#0000ff">Chain-for-Children's-Cheer</font>
          </b></a>
        <a class="btn" href="resources.html">Resources to Educate &amp; Awaken</a>
      </p>
      <div class="content font-big">
        <!-- ################################################################################################ -->
        <h2 class="heading font-x2"><b>
            <font color="#0000ff">Chain-for-Children's-Cheer</font>
          </b></h2>
        <div class="scrollable">
          <table>

            <thead>
           
              <tr>
                <th style="width:5%">S.No.</th>
                <th style="width:18%">Name</th>
                <th style="width:14%">Profession</th>
                <th style="width:14%">City/Town</th>
                <th style="width:14%">Country</th>
                <th style="width:35%">Remarks</th>
              </tr>
            </thead>

          <tbody>

          <?php 
                if(mysqli_num_rows($result) > 0){
                  while($row= mysqli_fetch_assoc($result)){
                             
              ?>
            <tr>
              <th><?php  echo $row['id'] ?></th>
              <th><?php  echo $row['name'] ?></th>
              <th><?php  echo $row['prof'] ?></th>
              <th><?php  echo $row['city'] ?></th>
              <th><?php  echo $row['country'] ?></th>
              <th><?php  echo $row['volevel'] ?></th>
              <th><?php  echo $row['remarks'] ?></th>
              
            </tr>
          <?php }
                }
          ?>
          </tbody>
          </table>
        </div>

        <p>Click <a href="index.html">here</a> to go back to the main page.</p>
      </div>
      <!-- ################################################################################################ -->
    </main>
    <div class="clear"></div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <main class="hoc container clear">
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="content">
        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear">
      <!-- ################################################################################################ -->
      <p class="fl_left">
      <figure><strong>Contact us:</strong>
      </figure>
      Join <a href="https://telegram.org/">Telegram</a> channel: <a
        href="https://t.me/u5india">https://t.me/u5india</a><br />
      Email: <img src="images/happy22kidsemail.png" style="width:50%">
      </p>
      <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/"
          title="Free Website Templates">OS Templates</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="layout/scripts/jquery.min.js"></script>
  <script src="layout/scripts/jquery.backtotop.js"></script>
  <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>

<!-- Mirrored from happy22kids.uho.org.in/chain4childrenscheer.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Dec 2023 17:28:57 GMT -->

</html>