<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Trouwsite 2.0</title>
   <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
   <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script> -->
   <!-- <script src="bower_components/jquery/dist/jquery.min.js"></script> -->
</head>
<body>
   <div class="wrapper" style="width: 50%; margin-left: 25%;">
      <div class="btn-group" style="margin: 2rem 0">
         <button type="button" name="button" class="addButtonFamily btn btn-outline-primary">Familie toevoegen</button>
         <button type="button" name="button" class="addButtonPerson btn btn-outline-primary">Persoon toevoegen</button>
      </div>
      <form class="addFamily" action="addFamily.php" method="POST" style="margin: 2rem 0">
         <fieldset class="form-group">
            <label for="familyName">Naam van de familie</label>
            <input type="text" class="form-control" id="familyName" name="familyName" placeholder="Naam van de familie">
         </fieldset>
         <button type="submit" class="btn btn-primary">Voeg toe!</button>
      </form>

      <form class="addPerson" action="addPerson.php" method="POST" style="margin: 2rem 0; display: none;">
         <fieldset class="form-group">
            <label for="familyName">Naam</label>
            <input type="text" class="form-control" id="personName" name="personName" placeholder="Naam">
         </fieldset>
         <fieldset>
            <label for="family">Hoort bij deze familie</label>
            <?php
               require_once "config.php";
               $query = "SELECT familyName FROM family";
               if(!mysqli_select_db($link, $db_name)){
                  die('Error selecting databse: ' . mysqli_error($link));
               }
               if(!mysqli_query($link, $query)){
                  die('Error inserting SQL: ' . mysqli_error($link));
               }
               if(!$result){
                  die('Error selecting familyName from family: ' . mysqli_error($link));
               }
               echo "<pre>";
               echo var_dump();
               die();
            ?>
           <select class="form-control" id="family" name="family">
              <option value="Dave Swart">Dave Swart</option>
              <option value="Cor Swart">Cor Swart</option>
              <option value="Michael Swart">Michael Swart</option>
              <option value="Sandy Swart">Sandy Swart</option>
              <option value="Jan Tolsma">Jan Tolsma</option>
           </select>
        </fieldset>
        <button type="submit" class="btn btn-primary">Voeg toe!</button>
      </form>
   </div>
   <script type="text/javascript">
      $(document).ready(function(){
         $(".addButtonPerson").click(function(){
            $(".addFamily").hide();
            $(".addPerson").show();
         });
         $(".addButtonFamily").click(function(){
            $(".addPerson").hide();
            $(".addFamily").show();
         });
      });
   </script>
</body>
</html>
