<!DOCTYPE html><html><head><meta charset="utf-8"></head><body>
<?php
   $con = mysqli_connect("", "root");

   $sql = "CREATE DATABASE IF NOT EXISTS chat";
   mysqli_query($con, $sql);

   mysqli_select_db($con, "chat");
   
   $sql = "CREATE TABLE IF NOT EXISTS daten (
      zeit TIMESTAMP NOT NULL,
      nick VARCHAR(15) NOT NULL DEFAULT '',
      beitrag VARCHAR(255) NOT NULL DEFAULT ''
      ) ENGINE=MyISAM DEFAULT CHARSET=UTF8";
   mysqli_query($con, $sql);
   
   $sql = "INSERT INTO daten (zeit, nick, beitrag) VALUES
      ('2015-06-17 08:11:00', 'Hans', 'Hallo zusammen'),
      ('2015-06-17 08:11:25', 'Claudia', 'Hallo Hans, bin auch wieder da'),
      ('2015-06-17 08:11:51', 'Peter', 'Tag Leute, um was geht es heute?')";
   mysqli_query($con, $sql);

   mysqli_close($con);
?>
</body></html>

