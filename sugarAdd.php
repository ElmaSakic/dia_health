<?php

   session_start();


$link = mysqli_connect ("localhost", "id5956478_elma", "2161997", "id5956478_projekat");


    if (mysqli_connect_error()) {

        die('Error');
    }

    if ($_POST) {


      if ($_POST["value"] == "0") {

        echo "Your sugar level is required<br>";

    } else {
        $email= $_SESSION['email'];
        $query = "INSERT INTO data (email, sugar, category)
                VALUES('"
                .mysqli_real_escape_string($link, $email)."', '"
                .mysqli_real_escape_string($link, $_POST['value'])."', '"
                .mysqli_real_escape_string($link, $_POST['timeCategory']).
                "')";


    }

    if(mysqli_query($link, $query)) {}

       header("Location: home.php");


    }



 ?>


 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="index.css">
 </head>


 <body class="container" style="background-color: #000;">

    <div style="font-size: 300%; color: #fff; text-align: center;margin-top: 30px;"><img src="photos/drop2.png" style="width:50px; margin-bottom: 10px; margin-right: -15px;"> Dia<span style="color:#D83F78;">Health</span></div>

    <form style=" margin-left: 30%; margin-top: 250px; padding: 20px;" id="quick_add_form" class="form-inline" method="post" >
         <input type='hidden' name='csrfmiddlewaretoken' value='nLQawrQHBCXRS6xa3hucru6Xwmav4YSu'  />
         <div id="div_id_value" class="form-group">
          <div class="controls">
            <input autofocus="True" class="numberinput form-control"
              id="id_value" name="value"
              placeholder="Value (mmol/L)"
              required="True" type="number" step="any" min="0"/>
            </div>
          </div>

          <div id="div_id_category" class="form-group" style="padding-left: 20px;">
            <div class="controls ">
              <select class="select form-control" id="id_category" name="timeCategory">
                <option value="Breakfast">Breakfast</option>
                 <option value="Lunch" >Lunch</option>
                  <option value="Dinner">Dinner</option>
                  <option value="Snack">Snack</option>
                  <option value="Bedtime">Bedtime</option>
                   <option value="No Category" selected="selected">No Category</option>
                 </select>
               </div>
             </div>
             <input id="id_record_date" name="record_date" type="hidden" >
              <input id="id_record_time" name="record_time" type="hidden" >
               <input type="submit" name="submit" value="Save" class="btn btn-primary" id="submit-id-submit" style="margin-left: 20px;">
           </form>

 </body>
 </html>
