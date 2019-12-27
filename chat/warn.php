<?php
include('api.php');
if($_COOKIE["cbgmember"] = "true"):
sendMessage("<font color='#ff0000'><u>! Warning, " . $_GET["u"] . ", " . $_GET["r"] . " !</u></font>");
else:
    echo "Insufficient permissions to perform that action.";
endif;
?>