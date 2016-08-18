<html>
<head>
    <title>Redirecting...</title>
    <meta http-equiv="refresh" content="10;URL=http://www.daveenmies.nl/admin/rsvp_admin.php">
</head>
<body>

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

$url='the/url/you/want/to/go';
echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
?>
</body>
</html>
