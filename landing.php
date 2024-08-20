<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kati Perkiö</title>
  <link rel="icon" type="image/x-icon" href="./images/logo.png" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Jost&family=Patrick+Hand+SC&display=swap"
    rel="stylesheet" />

  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
    rel="stylesheet" />
</head>

<body>
  <header>
    <img id="logo" src="./images/logo.png" alt="Kati Perkiö Logo" />
    <h1>Kati Perkiö</h1>
    <button class="mobile">
      <span class="material-symbols-outlined"> menu </span>
    </button>
    <div class="navigation">
      <div class="navbtn"><a href="#aboutme">About Me</a></div>
      <div class="navbtn"><a href="#projects">Projects</a></div>
      <div class="navbtn"><a href="#skills">Skills</a></div>
      <div class="navbtn"><a href="#timeline">Timeline</a></div>
      <div class="navbtn"><a href="#contact">Contact</a></div>
    </div>
  </header>
  <div class="bg-container"></div>
  <div class="content">
    <?php

    include 'inc/aboutme.php';
    include 'inc/projects.php';
    include 'inc/skills.php';
    include 'inc/timeline.php';
    include 'inc/contact.footer.php';

    ?>
  </div>
  <script src="main.js"></script>
</body>

</html>