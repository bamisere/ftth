<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME PACK FORM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <!--<div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Address, City, Country</div>
        <div><i class="fas fa-envelope"></i>contact@email.com</div>
        <div><i class="fas fa-phone"></i>+00 0000 000 000</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>-->
      <div class="contact-form">
        <h2>FILL IN DETAILS</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <input type="text" name="username" class="text-box" placeholder="Username" required>
          <input type="text" name="password" class="text-box" placeholder="Password" required>

          <select id="plan" name="plan">
              <option value="REGULAR PLAN  10mbps N10,750">REGULAR PLAN  10mbps N10,750</option>
              <option value="BRONZE PLAN   20mbps N16,125">BRONZE PLAN   20mbps N16,125</option>
              <option value="SILVER PLAN   30mbps N21,500">SILVER PLAN   30mbps N21,500</option>
              <option value="GOLD PLAN     40mbps N26,875">GOLD PLAN     40mbps N26,875</option>
              <option value="PLATINUM PLAN 50mbps N32,250">PLATINUM PLAN 50mbps N32,250</option>
            </select>

          <!--<textarea name="message" rows="5" placeholder="Your Message" required></textarea>-->
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

  </body>
</html>