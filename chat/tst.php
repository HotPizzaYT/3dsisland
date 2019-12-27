<?php


// I wonder what it could be if you're not the owner...
// You dirty dirty DIRTY hacker!
// Or... admin..
// comment




// Last line of...


// Remove the last line from the variable.



// PHP is extremely weird. I wish it was more like Javascript. But no. It has to do this weird thing.

if($_COOKIE["cbgmember"] = "true"):

// If you have CBG membership (aka I have met you IRL.)
// Allow less than and greater than signs to be used raw along with other things.

$messageRequest = $_COOKIE["message"];

else:

$messageRequest = htmlspecialchars($_COOKIE["message"]);

endif;

$messageRequest = str_replace(":err:", "<img src='err.png' alt='(X)'>", $messageRequest);
$messageRequest = str_replace(":own:", "<img src='Owner.png' alt='[M]'>", $messageRequest);
$messageRequest = str_replace(":cbg:", "<img src='cbg.png' alt='&lt;CBG&gt;'>", $messageRequest);
$messageRequest = str_replace(":)", "<img src='smile.gif' alt=':)'>", $messageRequest);
$messageRequest = str_replace("=O.O=", "<img src='blush.gif'>", $messageRequest);
$messageRequest = str_replace(":xD:", "<img src='ecksdee.png' alt='xD'>", $messageRequest);
$messageRequest = str_replace(":pingas:", "<img src='pengas.png' width='16' height='16' alt='snopingas'>", $messageRequest);
$messageRequest = str_replace(":weed:", "<img src='weed.png' alt='[teh healing herb that also gets u high]'>", $messageRequest);
$messageRequest = str_replace("^:^", ";", $messageRequest);
$messageRequest = str_replace("^p^", "%", $messageRequest);

// Uhhhhhhhhh ignore this....

$messageRequest = str_ireplace("fuck", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("shit", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("nigger", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("slut", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("whore", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("porn", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("wanker", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("nigga", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("cunt", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("fortnite is good", "fortnite is the WORST GAME YOU CAN EVER PLAY EVER", $messageRequest);
// Need a replacer, and I don't know how.




// Use the registering thingy
// COOKIES
$nick = $_COOKIE["nickname"];
$formatted = $_COOKIE["before"] . " <b><u>" . $_COOKIE["nickname"] . ":</u></b> ";



$cmsgPut = "";

$completeMSG = $formatted . $messageRequest . "<br>\x0D\x0A";

// Make it to where you can combine first line.
// I guess I just can't see the lines in plain ol' notepad. Oh well...
$cmsgPut = $completeMSG;

// put this RIGHT here incase we need it for some reason. ANNND IT SCREWS THE CHAT UP. GREAT.

file_put_contents("./getMsg.php", $completeMSG);

// Finally send the message while also deleting the last line! (The amount of lines started out with will always be maxed out)



// Delete last line



// And now we're done SETTING THE GETMSG FILE !

// Ok, also I'm done with these comments
echo $completeMSG;
?>