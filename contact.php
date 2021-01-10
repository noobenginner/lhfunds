<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="responsive.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact | L&H Funds</title>
    <style>.requiredItem{color: #f00;}</style>
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
          <div class="container">
            <h2>Contact Form</h2>
            <p>Please fill out the form below and submit it to us.</p>
            <p>Asterisks (<span class="requiredItem">*</span>) indicate fields required to complete this contact form.</p>

            <form action="confirm.php" method="post">
                <label>
                  First Name(<span class="requiredItem">*</span>)
                  <input type="text" name="f_name" placeholder="First Name" required>
                </label>
                <label>
                  Middle Name
                  <input type="text" name="m_name" placeholder="Middle Name">
                </label>
                <label>
                  Last Name(<span class="requiredItem">*</span>)
                  <input type="text" name="l_name" placeholder="Last Name" required>
                </label>
                <label>
                  E-mail Adress(<span class="requiredItem">*</span>)
                  <input type="email" name="email" placeholder="E-mail Address" required>
                </label>
                <label>
                  Phone Number
                  <input type="tel" name="tel" placeholder="Phone Number">
                </label>
                <label>
                  Address Line 1
                  <input type="text" name="address1" placeholder="Address Line 1">
                </label>
                <label>
                  Address Line 2
                  <input type="text" name="address2" placeholder="Address Line 2">
                </label>
                <label>
                  City
                  <input type="text" name="city" placeholder="City">
                </label>
                <label>
                  State/Province
                  <input type="text" name="state" placeholder="State/Province">
                </label>
                <label>
                  Zip/Postal Code
                  <input type="text" name="zip" placeholder="Zip/Postal Code">
                </label>
                <label>
                  <p>Country</p>
                  <select name="country">
                    <option value="">Country...</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AG">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AG">Antigua &amp; Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AA">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BL">Bonaire</option>
                    <option value="BA">Bosnia &amp; Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BR">Brazil</option>
                    <option value="BC">British Indian Ocean Ter</option>
                    <option value="BN">Brunei</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="IC">Canary Islands</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                  </select>
                </label>
                <label>
                  Contents(<span class="requiredItem">*</span>)
                  <textarea name="contact" placeholder="Contents" required></textarea>
                </label>
                <input type="submit" value="Confirm">
            </form>
          </div>
        </div>

      <footer>
        <div>©2021 L&H Funds. All rights reserved.</div>
      </footer>
    </div>
  </body>
</html>
