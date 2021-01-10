<?php
    $firstName =  $_POST['f_name'];
    $middleName =  $_POST['m_name'];
    $lastName = $_POST['l_name'];
    $mail = $_POST['email'];
    $tel =  $_POST['tel'];
    $address1 =  $_POST['address1'];
    $address2 =  $_POST['address2'];
    $city =  $_POST['city'];
    $state =  $_POST['state'];
    $zip =  $_POST['zip'];
    $country =  $_POST['country'];
    $contact =  $_POST['contact'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="responsive.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Confirm | L&H Funds</title>
    <style>
      .form-btn{
        margin-left: 30%;
        margin-right: 30%;
        display: flex;
        text-align: center;
      }
      button{
        width: 50%;
        padding: 10px;
        margin: 10px auto;
        display: block;
      }
    </style>
  </head>

  <body>
    <div class="wrapper">
      <header>
        <p><a href="index.html" class="hearder-logo"><img src="images/logo.png" alt="L&H Funds"></a></p>
        <nav id="header-menu">
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="strategies.html">Strategies</a></li>
            <li><a href="privacy.html">Privacy</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </header>

        <div class="inner">
          <div class="contents">
            <h2>Contact Form</h2>
            <p>If the following information is correct then press the "submit" button.</p>
            <form action="complete.html" method="post">
              <div>
                <label>First Name</label>
                <p><?php echo $firstName; ?></p>
              </div>
              <div>
                <label>Middle Name</label>
                <p><?php echo $middleName; ?></p>
              </div>
              <div>
                <label>Last Name</label>
                <p><?php echo $lastName; ?></p>
              </div>
              <div>
                <label>E-mail Address</label>
                <p><?php echo $mail; ?></p>
              </div>
              <div>
                <label>Phone Number</label>
                <p><?php echo $tel; ?></p>
              </div>
              <div>
                <label>Address Line 1</label>
                <p><?php echo $address1; ?></p>
              </div>
              <div>
                <label>Address Line 2</label>
                <p><?php echo $address2; ?></p>
              </div>
              <div>
                <label>City</label>
                <p><?php echo $city; ?></p>
              </div>
              <div>
                <label>State/Province</label>
                <p><?php echo $state; ?></p>
              </div>
              <div>
                <label>Zip/Postal Code</label>
                <p><?php echo $zip; ?></p>
              </div>
              <div>
                <label>Country</label>
                <p><?php echo $country; ?></p>
              </div>
              <div>
                <label>Contents</label>
                <p><?php echo $contact; ?></p>
              </div>

              <div class="form-btn">
                <button type="button" onclick="history.back()" style="width:45%;margin-right:10%;">Correct</button>
                <input type="submit" name="submit" value="Submit" style="width:45%;">
              </div>
            </form>
          </div>
        </div>

      <footer>
        <div>©2021 L&H Funds. All rights reserved.</div>
      </footer>
    </div>
  </body>
</html>
