<?php
include('api.php');
if($_COOKIE["cbgmember"] = "true"):
sendMessage($_GET["m"]);
else:
    echo "<h1 style='text-align: center;'>Error</h1>You have insufficient permissions to perform that action. You must have admin on the chat in order to send raw messages";
endif;
echo "<br><br><br> Has CBG member: <b>" . $_COOKIE["cbgmember"] . "</b>"
?>