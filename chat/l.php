


<html onload="hideMadeWith();">

  <head>
  <style>
  l {
  padding-left: 5px
  }
  .bg {
/*
  background: url(bg.png) 0 0 no-repeat
*/
background-color: #000000;
  }
  iframe.chatInner {
  overflow-y: auto;
  overflow-x: hidden;
  
  }
  </style>
  
  <script src="https://code.jquery.com/jquery-3.4.0.min.js" ></script>
  
  <script src="http://chromebookgang.000webhostapp.com/chat/bot.js" ></script>

<!-- Begin insert of bot script for low end devices. -->
<script>
<?php echo readfile("http://chromebookgang.000webhostapp.com/chat/bot.js"); ?>
</script>
<!-- End of bot script insert -->
  
  <script>
  function hideMadeWith(){
      $('[style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"]').hide();
  }
  
  
  // Just a thing.
  function blockEl(cssSelctr){
      $(cssSelectr).hide();
  }
  
  
  /*
  
  =================================------------------------====================================
  
  This is the code where you don't touch.
  At all. Because if you touch this code, the chat won't load.
  
  Why does that rhyme?
  */
  
  // This set of code was rewritten by Error. Muhaahahahah
    function checkMess() {

var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("chtDemoA").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "innerchat.php", true);
  xhttp.send();


    }
  // End of code written by Furious
  
  
  
  
  function checkMessRefresh(){
  
  // If we're gonna do this, then let's restore the scroll.
  
  // We're going to be using "obj" since document.getElementsByTagName("iframe")[0] doesn't work for some reason.
  
  var ifs = document.getElementById("chatInner").contentWindow.scrollTop;
  var noblink = document.getElementById("chatInner").contentDocument;
  
  // Refresh.
  
  document.getElementById("chatInner").contentWindow.location.reload();
  // Set it back
  
  
  
  // Never mind, it just makes it annoying to scroll!
  
  // document.getElementById("chatInner").contentWindow.scrollTop = ifs;
  
  // How do I do this without it turning white and then coming back again?
  // Nevermind, I'll use setInterval();
  
  }
  
  window.setInterval(function(){ checkMess(); }, 3000);
  
  
  
  
  
  
  
  /*
  BEGIN GET COOKIE
  
  Credit goes to w3schools.com for an example
  
  
  */
  
  var getCookie = function(cname){
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++){
  var c = ca[i]
  while (c.charAt(0) == ' '){
  c = c.substring(1);
  }
  if (c.indexOf(name) == 0){
  return c.substring(name.length, c.length);
  }
  }
  return "";
  }
  
  /*
  END GET COOKIE
  */
  
  
  // I'm gonna go to your house and steal your cookies...
  // Just kidding! We're only just doing a cookie check!
  
  function checkCookie(){
  if (getCookie("nickname") !== "")
  {
  
  // You do have the cookies then. Great!
  
  return true;
  } else {
  
  // Bruh, we can't let you chat without them. Cookies are life man.
  
  return false;
  
  // Do if false in the cookie check div on load
  }
  }
  
  // Just another function, I guess...
  
  function ifCookie(){
  if(checkCookie == ""){
  document.getElementById("cookieAlert").style.display = "block";
  }
  }
  
  
  
  function nameColor(){
      var col = document.getElementById("colBox").value;
      var name = getCookie("nickname");
      document.cookie = "nickname=<font color='" + col + "'>" + name + "</font>; expires=Fri, 31 Dec 9999 23:59:59 GMT;";
  }
  
  
  
  
  // Hidden easter egg for you all :DDDDDDD ECKS DEE
  // Makes you appear as if you were the Owner.
  function makeMiiMod(){
      // I hate having to do this expiration...
  document.cookie = "before=<img src='Owner.png' /><img src='cbg.png'>;  expires=Fri, 31 Dec 9999 23:59:59 GMT;";
  document.cookie = "cbgmember=true;  expires=Fri, 31 Dec 9999 23:59:59 GMT;";
  }
  
  
  
  
  
  
  
  
  
  function id(idName){
  document.getElementById(idName)
  
  }
  function keyCheck(event){
  if(event.keyCode === 13){
  
  // Here lies a very old version of CBG chat. Rest in pieces of code, dude. :'(
  
  // document.getElementById("chatInner").innerHTML = '<img src="Owner.png" /><img src="cbg.png" /><b><u><font color="#FF0000">H</font><font color="#CC0000">x</font><font color="#990000">O</font><font color="#FF0000">r</font>:</u></b> ' + document.getElementById("sender").value + '<br>' + document.getElementById("chatInner").innerHTML;
  // document.getElementById("sender").value = "";
  // Done sending stuff as owner
  
  // Risky, but gets the job done.
  // I don't know how, but it does.
  
  var sendpost = document.getElementById("sender").value;
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "sender.php", true);
  
  // Need help with this one :(
  
  xhr.setRequestHeader("Content-Type", "application/json");
  
  // Meh, only the xhr itself will be important. I don't know a thing about trying to insert JSON into PHP
  // This is a much EASIER way.
  // Requires cookies though!
  
  document.cookie = "message=" + sendpost.replace(/;/g, "^:^").replace(/%/g, "^p^") + ";"
  
  
  xhr.send(JSON.stringify({ "nickname": getCookie("nickname"), "T1": "sendpost" }));
  
  sendData(sendpost, getCookie("nickname"));



// Debug time!

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "tst.php", true);
  
  // Need help with this one :(
  
  xhr.setRequestHeader("Content-Type", "application/json");
  
  // Meh, only the xhr itself will be important. I don't know a thing about trying to insert JSON into PHP
  // This is a much EASIER way.
  // Requires cookies though!
  
  document.cookie = "message=" + sendpost.replace(/;/g, "^:^").replace(/%/g, "^p^") + ";"
  
  
  xhr.send(JSON.stringify({ "nickname": getCookie("nickname"), "T1": "sendpost" }));
  
//  sendData(sendpost, getCookie("nickname"));
  
  // Set to blank
  
  document.getElementById("sender").value = ''
  }
  }
  function sendIt(){
  var sendpost = document.getElementById("sender").value;
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "sender.php", true);
  
  // Need help with this one :(
  
  xhr.setRequestHeader("Content-Type", "application/json");
  
  // Meh, only the xhr itself will be important. I don't know a thing about trying to insert JSON into PHP
  // This is a much EASIER way.
  // Requires cookies though!
  
  // No need to put an expiration date here though.
  
  document.cookie = "message=" + sendpost.replace(/;/g, "^:^").replace(/%/g, "^p^") + ";"
  
  
  xhr.send(JSON.stringify({ "nickname": getCookie("nickname"), "T1": "sendpost" }));
  
  sendData(sendpost, getCookie("nickname"));
  
  // Reset the text box.
  
  document.getElementById("sender").value = ''
  }
  </script>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>New Tab</title>
  </head>
  
  <body onload="checkMess()">
  <style>
  #chtDemoA { font-size: 14px; }
  </style>
  <div style="position: absolute; width: 1084px; height: 478px; z-index: 1; left: 0px; top: 1px" class="bg" id="layer1">
  <!-- Initiate chat refresh -->
  <blockquote>
	<div frameborder="0" style="background-color: white; position: absolute; width: 889px; height: 441px; z-index: 1; left: 5px; top: 7px; overflow-y: auto; overflow-x: hidden; padding-left: 8px" src="innerchat.php" 
  
   id="chtDemoA" class="chatInner"></div>
	</blockquote>
  <div style="position: absolute; width: 857px; height: 30px; z-index: 1; left: 46px; top: 447px" id="layer3">
    <div style="background-color: white; position: absolute; width: 174px; height: 442px; z-index: 1; left: 852px; top: -445px; overflow-y: scroll" id="layer4">
  <span style=""><l>- <font color="#990000"><u><b>Thistlez</b></u></font></l><br><l>- 
  <font color="#00FFFF"><u><b>SteveZX5</b></u></font></l><br><l><img src="Owner.png" /><img src="cbg.png">- 
  <b><u><font color="#FF0000">H</font><font color="#CC0000">x</font><font color="#990000">O</font><font color="#FF0000">r</font></u></b></l><br><l>- 
  <font color="#FF0000"><u><b>ZStats</b></u></font></l><br><l>- 
  <font color="#0000FF"><u><b>KSage</b></u></font></l><br><l>- <u><b>
  <font color="#99FF99">&lt;E</font><font color="#66FF66">xc</font><font color="#33CC33">al</font><font color="#009933">ib</font><font color="#003300">er</font><font color="#009933">&gt;</font></b></u></l><br><l>- 
  <u><b><font color="#00FF00">H</font><font color="#00FF99">a</font><font color="#00FFCC">x</font><font color="#00FFFF">M</font><font color="#66FFFF">a</font><font color="#CCFFFF">s</font><font color="#66FFFF">t</font><font color="#00FFFF">e</font><font color="#00FFCC">r</font><font color="#00FF99">1</font><font color="#00FF00">23</font></b></u></l>
  <br>
  <l>x <u title="This user has been banned"><font color="red"><b><s>ZStRId3r</s></b></font></u></l>
  
  
  
  
  <br>
  Change my nickname:
  <!-- Cookie expiry is very VERY IMPORTANT -->
  <input type="text" name="nickname" placeholder="New nickname" id="nn" />
  <button onclick="document.cookie = 'nickname=' + document.getElementById('nn').value + ';  expires=Fri, 31 Dec 9999 23:59:59 GMT;';">Change</button>
  <br>
  Change my color:
  <br>
  <input type="text" placeholder="#rrggbb" id="colBox" />
  <button onclick="nameColor();">Color!</button>
  
  
  
  
  </span></div>
      <!--webbot bot="SaveResults" U-File="innerchat.php" S-Format="TEXT/CSV" S-Label-Fields="TRUE" startspan --><input TYPE="hidden" NAME="VTI-GROUP" VALUE="0"><!--webbot bot="SaveResults" i-checksum="43374" endspan -->
  
  <!-- FrontPage is going to destroy my form. Uh-oh... -->
  
  
      <p><!-- <form action="sender.php" method="post"> --><input type="text" onkeydown="keyCheck(event)" name="T1" id="sender" size="94"><input type="submit" onclick="sendIt();" value="Send!" name="B1" maxlength="2000"><!-- </form> --> </p>
    
    <p>&nbsp;</div>
  &nbsp;</div>
  
  <div style="width: 500px; height: 500px; background-color: white; position: fixed; z-index: 999; top: 10%; left: 10%; display: none;" onload="ifCookie();" id="cookieAlert">
    <p style="text-align: center">
      <h1>Surrender!</h1>
      <h2 style="color: #808080">What did I do?</h2>
      <p>
        <font color="#808080">
          You have:
          <br>
          - Violated some random law of not having cookies!
          <br>
          <br>
          That's it, we know nothing else. If there was something else we knew you would fill out this to fix your cookies, which simply just means <b>your name but not your real name</b>. :
        </font>
        <br>
        <input type="text" id="cookies" title="Enter doesn't work, please press the button." />
        <button onclick="document.cookie = 'nickname=' + document.getElementById('cookies').value + ';'; document.cookie = 'cbgmember=false';">Set nickname</button>
      </p>
    </p>
  </div>
  </body>
  
  </html>