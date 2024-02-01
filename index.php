<?php

if (isset($_GET["email"])) {
  $env = parse_ini_file(".env");
  $botToken = $env["TG_API_KEY"];
  $chatId = '-4140601932';
  $message = "Received a new Booking" . PHP_EOL . "Full Name: "
    . $_GET["fullname"] . PHP_EOL . "Email: " . $_GET["email"] . PHP_EOL . "Date: " . $_GET["date"];
  $bookingInfo =
    $apiUrl = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
  file_get_contents($apiUrl);
  header("Location: " . "/?booking-success=true");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QuestBoom</title>
  <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="./style/style.css">
</head>

<body>

  <div class="background-marks"></div>

  <header class="page-section">
    <div class="logo-block">
      <img src="./assets/logo.png" />
    </div>
    <h2>World's best quest rooms</h2>
    <div class="header-info">
      <div class="info-item item-booking">Booking</div>
      <div class="info-item item-about-us">About us</div>
      <div class="info-item item-contact-info">Contact info</div>
    </div>
  </header>

  <section class="page-section greeting-offer">
    <div class="main-offer">
      <?php
      if ($_GET["booking-success"] ?? false) :
      ?>
        <h1>Thanks for your booking!</h1>
      <?php
      else :
      ?>
        <h1>unforgettable quest room?</h1>
        <button>Book now</button>
      <?php endif; ?>
    </div>
  </section>

  <section class="page-section additional-info">
    <h2>Most popular offers</h2>
    <div class="offers-list">
      <div class="offer-item">
        <img src="./assets/qrpr4.jpg" />
        <label>Solve together</label>
      </div>
      <div class="offer-item">
        <img src="./assets/qrpr6.jpg" />
        <label>Find a way</label>
      </div>
      <div class="offer-item">
        <img src="./assets/qrpr3.jpg" />
        <label>To perfect time</label>
      </div>
    </div>
  </section>

  <section class="page-section booking-form">
    <h2>Book your emotions</h2>
    <form class="booking-form">
      <div class="form-item">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
      </div>
      <div class="form-item">
        <label for="fullname">Full name</label>
        <input type="fullname" name="fullname" id="fullname" required>
      </div>
      <div class="form-item">
        <label for="date">Date</label>
        <input type="date" name="date" id="date" required>
      </div>
      <button class="submit-booking" type="submit">
        Submit booking
      </button>
    </form>
  </section>

  <section class="page-section about-us">
    <h2>About us</h2>
    <div class="about-us-text">
      <p>
        Welcome to QuestBoom, where we turn ordinary moments into extraordinary adventures. As avid puzzle enthusiasts, our team is on a mission to create immersive escape room experiences that challenge your mind and ignite your sense of wonder.
      </p>
      <p>
        Step into our meticulously designed escape rooms, each with a unique theme and storyline. From solving mysteries in a detective's office to exploring ancient tombs, our rooms are crafted to transport you to new worlds, filled with intrigue and excitement.
      </p>
      <p>
      <ul>
        <li>
          <b>Immersive Storytelling:</b> Our escape rooms are not just puzzles; they are narratives waiting to unfold. Engage with captivating stories that evolve as you progress through the challenges.
        </li>
        <li>
          <b>Innovative Puzzles:</b> Prepare to be mentally stimulated by a diverse range of puzzles that will test your logical thinking, observational skills, and ability to think outside the box.
        </li>
      </ul>
      </p>
      <p>
        Embark on a journey with [Company Name] and experience the thrill of escaping reality. Whether you're a group of friends, family, or coworkers, we invite you to unlock the mysteries within our walls and create lasting memories. Are you ready for the challenge?
      </p>
    </div>
  </section>

  <section class="page-section contact-info">
    <h2>Contact info</h2>
    <div class="contact-info-text">
      <p>
        <b>Consultations</b>
      <ul>
        <li>Email: info@companyname.com</li>
        <li>Phone: +1 (555) 123-4567</li>
      </ul>
      </p>
      <p>
        <b>Customer Support</b>
        For any inquiries or assistance, our customer support team is here to help:
      <ul>
        <li>
          Email: support@companyname.com
        </li>
        <li>
          Phone: +1 (555) 987-6543
        </li>
      </ul>
      </p>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", (e) => {
      const scrollToBooking = () => {
        document.querySelector("form.booking-form").scrollIntoView({
          behavior: "smooth",
          block: "center"
        })
        document.querySelector("input#email").focus()
      }

      const scrollToAboutUs = () => {
        document.querySelector(".about-us-text").scrollIntoView({
          behavior: "smooth"
        })
      }

      const scrollToContactInfo = () => {
        document.querySelector(".contact-info-text").scrollIntoView({
          behavior: "smooth"
        })
      }

      document.querySelector(".main-offer > button").addEventListener("click", scrollToBooking)
      document.querySelector(".item-booking").addEventListener("click", scrollToBooking)
      document.querySelector(".item-contact-info").addEventListener("click", scrollToContactInfo)
      document.querySelector(".item-about-us").addEventListener("click", scrollToAboutUs)
    })
  </script>
</body>

</html>