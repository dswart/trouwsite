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
?>
