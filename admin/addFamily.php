<?php
require_once "config.php";
$familyName = mysqli_real_escape_string($link, $_POST['familyName']);
$inviteCode = rand(10000, 99999);
echo "The family name you entered: " . $familyName;
echo "<br>";
echo "The invite code generated: " . $inviteCode;
echo "<br>";

$sql = "
   INSERT INTO family
   (
      familyName,
      familyInviteCode
   )
   VALUES
   (
      '".$familyName."',
      '".$inviteCode."'
   )
";
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
