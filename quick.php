<?php
   $link = mysqli_connect ("localhost", "root", "", "projekat");

    if (mysqli_connect_error()) {

        die('Error');
    }

    if ($_POST) {

        

        $email= $_SESSION['email'];
        $query = "INSERT INTO data (email, sugar, category) 
                VALUES('"
                .mysqli_real_escape_string($link, $email)."', '"
                .mysqli_real_escape_string($link, $_POST['value'])."', '"
                .mysqli_real_escape_string($link, $_POST['timeCategory']).
                "')";

                $sugar = mysqli_real_escape_string($link, $_POST['value']);
        $_SESSION['sugar'] = $sugar;

                mysqli_query($link, $query);
              

    }

 ?>


 