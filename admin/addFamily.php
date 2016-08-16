<?php
require_once "config.php";
$familyName = mysqli_real_escape_string($link, $_POST['familyName']);
$inviteCode = rand(10000, 99999);
echo $familyName;
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
