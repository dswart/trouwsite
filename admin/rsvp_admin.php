<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Trouwsite 2.0</title>
   <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
   <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
   <!-- <script src="bower_components/jquery/dist/jquery.min.js"></script> -->
</head>
<body>
   <form class="addFamily" action="addFamily.php" method="POST" style="width: 50%; margin-left: 25%; margin: 2rem 25% 2rem 25%;">
     <fieldset class="form-group">
       <label for="familyName">Naam van de familie</label>
       <input type="text" class="form-control" id="familyName" name="familyName" placeholder="Naam van de familie">
     </fieldset>
     <button type="submit" class="btn btn-primary">Submit</button>
   </form>
</body>
</html>
