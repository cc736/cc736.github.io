<header>

  <!-- create a parent flex box -->
  <div id="header_container">

    <!-- child 1 of flex -->
    <h1 id="title"><?php echo $title; ?></h1>

    <!-- child 2 of flex  -->
    <div id="menu_container">
      <nav id="menu">
        <ul>
          <?php
          foreach($page_names as $id => $name) {
            if ($id == $onThisPage) {
              $styling = "class='active'";
            } else {
              $styling = "class='static'";
            }
            echo "<li><a " . $styling . " href='" . $id. ".php'>$name</a></li>";
          }
          ?>
        </ul>
      </nav>
    </div>
  </div>

</header>

<hr>
