<?php
include("includes/init.php");

$onThisPage="about";

$form= (isset($_REQUEST["submit"]) ? $_REQUEST["submit"] : null);

if (isset($form)){
  $name=$_REQUEST["contact_name"];
  $email=$_REQUEST["contact_email"];
  $details=$_REQUEST["contact_details"];

  if (((!empty($name)) && (!empty($email) && (filter_var($email, FILTER_VALIDATE_EMAIL))) && ( !empty($details)) )){
    $success = true;
  } else{
    $success = false;
  }


  if ($success){

    header("Location: response.php");

    session_start();
    $_SESSION["contact_name"] = htmlspecialchars($name);
    $_SESSION["contact_email"] = htmlspecialchars($email);
    $_SESSION["contact_details"] = htmlspecialchars($details);


    return;
  }
}  else {
  $success = true;
}

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
    <h2 class="page_title">Who am I?</h2>
    <h4 class="page_description">Learn more about ~ m e ~</h4>

    <!-- the following image is mine -->
    <img id="about_header" alt="aboutheader" src="images/about_header.jpg"/>

    <!-- about details  -->
    <p class="about">
      Hey there, I'm Cedric!
    </p>

    <p class="about">
      I'm currently a sophomore at Cornell and I'm studying how people interact with technology through a major in Information Science and concentration in User Experience. Originally, I intended on studying the technical side of computing, but found a passion for human-computer interaction through a student-taught course in Digital Product Design. I'm also interested in design outside of the digital realm and hope to explore physical design through a minor in Architecture!
    </p>

    <p class="about">
      Currently, I’m a designer on an engineering project team (Cornell Design and Tech Initiative) where I'm working on an app to centralize events at Cornell. I'm also interning as a product designer with an educational technology startup (EDUSIM) and working on making meaningful learning experiences.
    </p>
    <p class="aboutLast">
      I’m looking forward to a productive summer and am seeking opportunities that will better the community and challenge me as a designer!
    </p>

    <!-- contact title -->
    <h2 class="page_title">Let's get in touch!</h2>
    <h4 class="page_description">Hit me up, I'll try to get back to you as soon as I can.</h4>

    <!-- contact me -->
    <form id="contact_form">
      <!-- what's their name? -->
      <h4 class="contact_subheading"> Who are you? </h4>
      <input name="contact_name" type="text" id="contact_name" required>

      <!-- what's their email?  -->
      <h4 class="contact_subheading"> Where can I get back to you? </h4>
      <input name="contact_email" type="email" id="contact_email" placeholder="Drop your email here" required>

      <!-- what's up? -->
      <h4 class="contact_subheading"> What's up? </h4>
      <input name="contact_details" type="text" id="contact_details" required>

      <!-- submit -->
      <input name="submit" type="submit" id="contact_button" value="Send">
    </form>

  </div>
</body>
