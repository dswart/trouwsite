<html>
<head>
    <title>Redirecting...</title>
    <meta http-equiv="refresh" content="10;URL=http://www.daveenmies.nl/admin/rsvp_admin.php">
</head>
<body>

<?php
require_once "config.php";
$personName = mysqli_real_escape_string($link, $_POST['personName']);
$family = mysqli_real_escape_string($link, $_POST['family']);
echo $personName;
echo $family;

if(!mysqli_select_db($link, $db_name)){
   die('Error selecting databse: ' . mysqli_error($link));
}
if(!mysqli_query($link, $sql)){
   die('Error inserting SQL: ' . mysqli_error($link));
}
else{
   echo 'Great success!';
}

if(!mysqli_select_db($link, $db_name)){
   die('Error selecting databse: ' . mysqli_error($link));
}
if(!mysqli_query($link, $sql)){
   die('Error inserting SQL: ' . mysqli_error($link));
}
else{
   echo 'Great success!';
}

?>
</body>
</html>
