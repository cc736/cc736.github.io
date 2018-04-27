<?php
include("includes/init.php");

$onThisPage="code";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- embed google font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title> <?php echo $title;?> </title>
</head>

<body>
  <?php include("includes/header.php");?>

  <div class="page_content">

    <!-- page header -->
    <h2 class="page_title">Code</h2>
    <h4 class="page_description">Here's some web-development class projects I've worked on!</h4>

    <!-- project 1: apple fest -->
    <div class="code_project">
      <!-- the following image is mine -->
      <img class="code_img" alt="applefest" src="images/code_applefest.jpg"/>

      <!-- hold the text seprately from the image -->
      <div class="code_details">
        <!-- left -->
        <div class="code_left">
          <!-- title -->
          <p class="code_title"> Ithaca AppleFest </p>
          <!-- technologies -->
          <p class="code_toolbox"> Toolbox </p>
          <ul class="code_tools">
            <li>HTML</li>
            <li>CSS</li>
            <li>Market Analysis</li>
          </ul>
        </div>
        <!-- right -->
        <div class="code_right">
          <!-- description -->
          <p class="code_description">
            For Intro to Design and Programming for Web (INFO 1300), I focused on the front-end development of a website concept for Ithaca's Annual Apple Festival. I began with researching similar festival websites to see how the current website compared and used that data to code one of my first websites. I familiarized myself with the structural properties of HTML and external styling using CSS.
          </p>
        </div>
      </div>

    </div>

    <!-- project 2: shadows dance troupe -->
    <div class="code_project">
      <!-- the following image is mine -->
      <img class="code_img" alt="shadows" src="images/code_shadows.jpg"/>
      <!-- hold the text seprately from the image -->
      <div class="code_details">
        <!-- left -->
        <div class="code_left">
          <!-- title -->
          <p class="code_title"> Shadows Dance Troupe </p>
          <!-- technologies -->
          <p class="code_toolbox"> Toolbox </p>
          <ul class="code_tools">
            <li>User Testing</li>
            <li>Javascript</li>
            <li>jQuery</li>
          </ul>
        </div>
        <!-- right -->
        <div class="code_right">
          <!-- description -->
          <p class="code_description">
            As one of four members in a group for our final project in Intro to Design and Programming for Web (INFO 1300), I worked to create a digital platform for an on-campus dance troupe: Shadows. I primarily worked on the design-side of this website from establishing client goals/needs to crafting high fidelity mockups, polished for developer handoff. My primary conrtibution to the code of the website centered around pixel-pushing in CSS files to ensure consistency throughout the site, but I also worked on the HTML of the landing page and applying Javascript animations.
          </p>
        </div>
      </div>
    </div>

    <!-- project 3: this website! -->
    <div class="code_project">
      <!-- the following image is mine -->
      <img class="code_img" alt="portfolio" src="images/code_portfolio.jpg"/>
      <!-- hold the text seprately from the image -->
      <div class="code_details">
        <!-- left -->
        <div class="code_left">
          <!-- title -->
          <p class="code_title"> My Portfolio </p>
          <!-- technologies -->
          <p class="code_toolbox"> Toolbox </p>
          <ul class="code_tools">
            <li>User-Centered Design</li>
            <li>PHP</li>
            <li>CSS Flexbox</li>
          </ul>
        </div>
        <!-- right -->
        <div class="code_right">
          <!-- description -->
          <p class="code_description">
            In my first project in Intermediate Design and Programming for Web (INFO 2300), I exercised my knowledge in HTML, CSS, and PHP. On the design side, I drafted low-fidelity sketches and more polished medium-fidelity wireframes before coding. I also used this opportunity to brush up on PHP security practices for input fields and familiarized myself with newer CSS technologies such as Flexbox.
          </p>
        </div>
      </div>
    </div>
  </div>
</body>
