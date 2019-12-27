<?php

include("mCow.php");
$canMilk = file_get_contents("./milkable.php");

function sendMessage($messageRequest){
    
    // Gotta nail this one first before we do anything.
$messageRequest = $messageRequest . "<br>\x0D\x0A";




$chatdemo = file('innerchat.php');



$last = sizeof($chatdemo) - 1;
echo $last;


unset($chatdemo[$last]);

$demoin = fopen('innerchat.php', 'w');

$completeMSG = $messageRequest;

fwrite($demoin, $messageRequest);
// Delete last line

fwrite($demoin, implode('', $chatdemo));

echo $completeMSG;

}

if ($_POST["f"] = "mc"){
if($canMilk == "1")
{
file_put_contents("./milkable.php", "0");
sendMessage("<div style=\"text-align: center\"><img src=\"cow.gif\" title=\"Totally not stolen!\" /><br /><span style=\"border-bottom: 3px dashed lime;\"><b>" . $_COOKIE["nickname"] . "</b> has <b>milked the cow</b> first this hour! (0 other users failed)</span></div>");
} else {
sendMessage("<font color='#808080'>" . $_COOKIE["nickname"] . " has failed to milk the cow.</font>");
}
}