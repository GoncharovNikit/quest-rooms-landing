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

  <header class="page-section">
    <div class="header-back-img"></div>
    <div class="header-dark-back"></div>
    <div class="header-top-section">
      <div class="logo-block">
        Quest Rooms
      </div>
      <div class="header-menu">
        <div class="menu-item item-offers">
          Offers
        </div>
        <div class="menu-item item-about-quests">
          About quests
        </div>
        <div class="menu-item item-booking">
          Booking
        </div>
        <div class="menu-item item-about-us">
          About us
        </div>
        <div class="menu-item item-contact-us">
          Contact us
        </div>
      </div>
    </div>

    <div class="header-offer">
      <?php if (!($_GET["booking-success"] ?? false)) : ?>
      <h3>Make your adventure</h3>
      <h1>
        This is where your dreams <br>
        of adventure come true
      </h1>
      <div class="offer-text">
        try first with 15% discount
      </div>
      <button>Book emotions</button>
      <?php else: ?>
      <h1>Thanks for booking!</h1>
      <br>
      <?php endif ?>
    </div>
  </header>

  <section class="page-section additional-info">
    <h2>your future adventure</h2>
    <h3>choose your story</h3>
    <div class="offers-list">
      <div class="offer-item">
        <img src="./assets/qv3.png" class="fix-img-width" />
        <h4>The Shawshank Redemption</h4>
        <h5>
          Become the hero of a cult film
          in a quest format.
        </h5>
        <button class="learn-more">
          Learn more
        </button>
      </div>
      <div class="offer-item">
        <img src="./assets/qv2.png" />
        <h4>Jailbreak</h4>
        <h5>
          Try to get out of the prison cell.
        </h5>
        <button class="learn-more">
          Learn more
        </button>
      </div>
      <div class="offer-item">
        <img src="./assets/qv1.jpg" class="fix-img-width" />
        <h4>The Zombie Apocalypse</h4>
        <h5>
          Survive the zombie apocalypse
          and save humanity.
        </h5>
        <button class="learn-more">
          Learn more
        </button>
      </div>
    </div>
  </section>

  <section class="page-section quests-description">
    <h2>learn more about quests</h2>
    <h3>
      Deep into the incredible world of your own quests
    </h3>
    <div class="additional-info-content">
      <div class="key-image">
        <div class="image-container">
          🗝️
        </div>
        <div class="image-label">
          Try yourself
        </div>
      </div>
      <div class="text-block">
        <h4>What awaits you?</h4>
        <div class="text-block-content">
          Go on exciting journeys where every step is a puzzle solution and every moment is an opportunity to make a choice.
        </div>
      </div>
      <div class="text-block">
        <h4>How Does It Work?</h4>
        <div class="text-block-content">
          Just choose your quest, assemble your team, and start solving puzzles. Each victory will bring you to a new level of emotion.
        </div>
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

  <script src="./script/script.js" defer></script>
</body>

</html>