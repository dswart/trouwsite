<?php
require_once "config.php";
$familyName = mysqli_real_escape_string($link, $_POST['familyName']);
$inviteCode = mysqli_real_escape_string($link, $_POST['inviteCode']);
echo $familyName;
echo "<br>";
// echo $inviteCode;
echo $_POST['inviteCode'];
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
