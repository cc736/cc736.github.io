<?php
include("includes/init.php");

$onThisPage="response";
session_start();
$nameResponse = ((isset($_SESSION["contact_name"])) ? $_SESSION["contact_name"] : null);
$emailResponse = ((isset($_SESSION["contact_email"])) ? $_SESSION["contact_email"] : null);
$detailsResponse = ((isset($_SESSION["contact_details"])) ? $_SESSION["contact_details"] : null);
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
    <h2 class="page_title">Thanks for reaching out!</h2>
    <h4 class="page_description">I'll be in touch soon.</h4>

    <p id='response'>
      Hey, <span class="echoed"> <?php echo($nameResponse); ?> </span> thanks for visiting my site. I'll get back to you at <span class="echoed"> <?php echo($emailResponse); ?> </span> as soon as I get the chance. Here's what you sent me, in case you forgot (it happens):

      <span class="echoedLess"> <?php echo($detailsResponse); ?> </span>

    </p>
  </div>
</body>
