<?php
require_once "config.php";
$familyName = mysqli_real_escape_string($db, $_POST['familyName']);
$inviteCode = mysqli_real_escape_string($db, $_POST['inviteCode']);
echo $familyName;
echo "<br>";
echo "<br>";
echo $inviteCode;
// $sql = "
//    INSERT INTO family
//    (
//       familyName,
//       familyInviteCode
//    )
//    VALUES
//    (
//       '".$familyName."',
//       '".$inviteCode."'
//    )
// ";
//
// if(!$res = mysql_query($sql))
// {
//     trigger_error(mysql_error().'<br />In query: '.$sql);
// }
// else
// {
//     $id = mysql_insert_id();
// }
?>
