<?php
    include 'MysqliDb.php';
    $link=new MysqliDb("localhost","root","","fetuscharm") or die();
  	$con = mysqli_connect("localhost","root","","fetuscharm") or die();
    $project_name="Fetus Charm";
    $host_name = 'mail.accreteit.com';
    $port = '587';
    $email_username = 'student@accreteit.com';
    $email_password = 'Kem_6o??';
    $team_name = 'FetusCharm-Team';
?>