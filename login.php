
      <?php

      session_start();

      $username = $_POST['username'];
      $password = $_POST['password'];

      if ($username  == "sarang" && $password == "19k1400") {
        $_SESSION['Login'] = true;
         echo "<h1>You are now logged in correctly</h1>";
         echo "<p><a href='document.php'>Link to protected file</a></p>";

        //header('Location: document.php');
      } else {
        $_SESSION["Login"] = false;
        echo "<h1>You are NOT logged in correctly</h1>";
        echo "<p><a href='document.php'>Link to protected file</a></p>";
      }


      ?>