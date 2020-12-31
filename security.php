<?php
include('databaseconfig.php');

if($connectionn)
{
    //echo "Database Connected";
}
else
{
    header("Location: databaseconfig.php");
}

?>
