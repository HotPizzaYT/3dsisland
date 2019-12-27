<?php

include("mCow.php");
$canMilk = file_get_contents("./milkable.php");

function sendMessage($messageRequest){
    
    // Gotta nail this one first before we do anything.
$messageRequest = $messageRequest . " ";
file_put_contents("./getMsg.php", $messageRequest);




$chatdemo = file('innerchat.php');



$last = sizeof($chatdemo) - 1;
echo $last;


unset($chatdemo[$last]);

$demoin = fopen('innerchat.php', 'w');

fwrite($demoin, $messageRequest);
// Delete last line

fwrite($demoin, implode('', $chatdemo));

echo $messageRequest;

}

// The cookie var actually means username HTML.
// Yay! Banning before account implementation!


function ban($cookie, $expires){
    sendMessage("<script>if (getCookie('nickname') == '" . $cookie . "'){ document.cookie='banned=true; " . $expires . "; }</script>");
}
function giveIcon($cookie, $img){
    sendMessage("<script>if (getCookie('nickname') == '" . $cookie . "'){ document.cookie='before=' + getCookie('before') + ' " . $img . "'; }</script>");
}
function censor($word, $str){
    $str = str_replace($word, "<img src='censored.gif' alt='****' />", $str);
}

// Yes! Milk cow is now here!

// function canMilk(){
// if(file_get_contents("/milkable.php") == "1")
// {
// return true;
// } else {
//  if(file_get_contents("/milkable.php") == "0"){
// return false;
// } else {
// echo "Error. File does not exist or does not contain '0' or '1'.";
// }
// }
// }

// RIP canMilk function... :(


// I don't know.
// I guess this could be embedded within someone's PHP.
// 



if ($_POST["f"] = "sendMessage"){
    
    $messageRequest = $_POST["m"];
    // Gotta nail this one first before we do anything.
$messageRequest = $messageRequest . "<br>\x0D\x0A";




$chatdemo = file('innerchat.php');



$last = sizeof($chatdemo) - 1;
echo $last;


unset($chatdemo[$last]);

$demoin = fopen('innerchat.php', 'w');



fwrite($demoin, $messageRequest);
// Delete last line

fwrite($demoin, implode('', $chatdemo));

echo $messageRequest;
file_put_contents("./getMsg.php", $messageRequest);
}
