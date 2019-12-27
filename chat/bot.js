// This bot was created by Furious.
// Some code was by Error.
// Actually, the entire AI had to be rewritten by Error for more compatibility.
// Also have a great day!

// Function to get cookie

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function clearChat(){
    if(getCookie("cbgmember") !== "true"){
                sendMessage("Insufficient permissions to perform that action");
            } else {
                fetch("http://192.168.1.100/restoreChat.php", {"credentials":"include","headers":{"accept":"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3","accept-language":"en-US,en;q=0.9","upgrade-insecure-requests":"1"},"referrerPolicy":"no-referrer-when-downgrade","body":null,"method":"GET","mode":"cors"});
                
				setTimeout(function(){ sendMessage("<img src='syscon.png' /> <font color='#808080'><u><b>SysCon:</b></u></font> Chat has been cleared by " + getCookie("nickname") + ".") }, 1000);
            }
}
// Let's me send messages.
function sendMessage(m)
{
    var xhr = new XMLHttpRequest();

    xhr.open("POST", "api.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
    xhr.send("f=sendMessage&m=" + encodeURIComponent(m) + "");
}

function milk(){

var xhr = new XMLHttpRequest();
xhr.open("POST", "cow.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
xhr.send("f=mc");
}

// Reddit Meme API
var memeImages;

// There are some things we need to LET go of.

function generateMemes() {
  
  url = "https://www.reddit.com/r/surrealmemes/.json?&show=all&limit=100";

  var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      storeResponseMeme(JSON.parse(xhttp.responseText));
    }
  };

  xhttp.open("GET", url, true);
  xhttp.send(null);
}

generateMemes();

function storeResponseMeme(json){
  var imageType;
  memeImages = [];

  for(i = 0, x = json.data.children.length; i < x; i++){

    imageType = json.data.children[i].data.url.slice(-3);

    if(imageType === "jpg" || imageType === "png" || imageType === "gif") {
      memeImages.push(json.data.children[i].data.url);
    }
  }
}

// Reddit SoftwareGore API
var softImages;

function generateSoftwareGore() {
  
  url = "https://www.reddit.com/r/softwaregore/.json?&show=all&limit=100";

  var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      storeResponseSoftwareGore(JSON.parse(xhttp.responseText));
    }
  };

  xhttp.open("GET", url, true);
  xhttp.send(null);
}

generateSoftwareGore();

function storeResponseSoftwareGore(json){
  var imageType;
  softImages = [];

  for(i = 0, x = json.data.children.length; i < x; i++){

    imageType = json.data.children[i].data.url.slice(-3);

    if(imageType === "jpg" || imageType === "png" || imageType === "gif") {
      softImages.push(json.data.children[i].data.url);
    }
  }
}

// Reddit CrappyDesign API
var crapImages;

function generateCrappyDesign() {
  
  url = "https://www.reddit.com/r/crappydesign/.json?&show=all&limit=100";

  var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      storeResponseCrappyDesign(JSON.parse(xhttp.responseText));
    }
  };

  xhttp.open("GET", url, true);
  xhttp.send(null);
}

generateCrappyDesign();

function storeResponseCrappyDesign(json){
  var imageType;
  crapImages = [];

  for(i = 0, x = json.data.children.length; i < x; i++){

    imageType = json.data.children[i].data.url.slice(-3);

    if(imageType === "jpg" || imageType === "png" || imageType === "gif") {
      crapImages.push(json.data.children[i].data.url);
    }
  }
}

// Reddit Birb API
var birbImages;

function generateBirb() {
  
  url = "https://www.reddit.com/r/birb/.json?&show=all&limit=100";

  var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      storeResponseBirb(JSON.parse(xhttp.responseText));
    }
  };

  xhttp.open("GET", url, true);
  xhttp.send(null);
} 

generateBirb();

function storeResponseBirb(json){
  var imageType;
  birbImages = [];

  for(i = 0, x = json.data.children.length; i < x; i++){

    imageType = json.data.children[i].data.url.slice(-3);

    if(imageType === "jpg" || imageType === "png" || imageType === "gif") {
      birbImages.push(json.data.children[i].data.url);
    }
  }
}

// OK here is my AI bot code..
function sendAI(message, username)
{
    var reply;
    var msg = message.toLowerCase().split(" ");
    username = username.replace(/<[^>]*>?/g, '');

    if(msg.indexOf("hi") >= 0 || msg.indexOf("hello") >= 0) {
        var replyData = ["Hello, " + username + "!", "Hi, there!", "Hi, I'm the bot for the CBG Chat!", "What's up, " + username + "?"];
        reply = replyData[Math.floor(Math.random() * replyData.length)];
        return reply;
    } else if(msg.indexOf("how") >= 0 && msg.indexOf("are") >= 0) {
        var replyData = ["I am good, " + username + ". Thanks for asking me.", "Good, what about you?", "What are you asking?", "Just chilling, " + username + "."];
        reply = replyData[Math.floor(Math.random() * replyData.length)];
        return reply;
    } else if(msg.indexOf("whats") >= 0 && msg.indexOf("up") >= 0) {
        var replyData = ["I am good, " + username + ". Thanks for asking me.", "Good, what about you?", "What are you asking?", "Just chilling, " + username + "."];
        reply = replyData[Math.floor(Math.random() * replyData.length)];
        return reply;
    } else if(/\d/.test(msg.join(' ')) && /[a-z]/i.test(msg.join(' ')) == false) {
        var math = msg.join(" ").replace(/[^\d.+*/-]/g, '');
         if(math == "+" || math == "-" || math == "*" || math == "/"){
            reply = "You think I can add letters?";
        } else {
            reply = eval(math);
        }
        return reply;
    } else if(msg.indexOf("fortnite") >= 0 && msg.indexOf("best") >= 0) {
        var replyData = ["Fortnite has the big gay.", "Gay!!", "You have the big gay!", "Did you know Fortnite is gay?", "Please understand " + username + ", Fortnite is the big gay.", "99% gay!"];
        reply = replyData[Math.floor(Math.random() * replyData.length)];
        return reply;
    } else if(msg.indexOf("fortnite") >= 0 && msg.indexOf("good") >= 0) {
        var replyData = ["Fortnite has the big gay.", "Gay!!", "You have the big gay!", "Did you know Fortnite is gay?", "Please understand " + username + ", Fortnite is the big gay.", "99% gay!"];
        reply = replyData[Math.floor(Math.random() * replyData.length)];
        return reply;
    } else if(msg.indexOf("fortnite") >= 0 && msg.indexOf("gay") >= 0) {
        var replyData = ["Yes, Fagnite has the big gey.", "Gaynite is gay!", "Fagnite is faggot gay.", "Fortnite is gay!", "Yes!!!", "PUBG gay to.", "99% gay!"];
        reply = replyData[Math.floor(Math.random() * replyData.length)];
        return reply;
    } else if(msg.indexOf("fortnite") >= 0) {
        var replyData = ["Fortnite has the big gay.", "Gay!!", "You have the big gay!", "Did you know Fortnite is gay?", "Please understand " + username + ", Fortnite is the big gay.", "99% gay!"];
        reply = replyData[Math.floor(Math.random() * replyData.length)];
        return reply;
    } else if(msg.indexOf("you") >= 0 && msg.indexOf("gay") >= 0) {
        var replyData = ["Ha, you're gayer!"];
        reply = replyData[Math.floor(Math.random() * replyData.length)];
        return reply;
    } else if(msg.indexOf("you") >= 0 && msg.indexOf("gey") >= 0) {
      var replyData = ["Ha, you're gayer!"];
      reply = replyData[Math.floor(Math.random() * replyData.length)];
      return reply;
    } else if(msg.indexOf("u") >= 0 && msg.indexOf("gey") >= 0) {
      var replyData = ["Ha, you're gayer!"];
      reply = replyData[Math.floor(Math.random() * replyData.length)];
      return reply;
    } else if(msg.indexOf("u") >= 0 && msg.indexOf("gay") >= 0) {
      var replyData = ["Ha, you're gayer!"];
      reply = replyData[Math.floor(Math.random() * replyData.length)];
      return reply;
    } else if(msg.indexOf("school") >= 0 && msg.indexOf("gay") >= 0) {
      var replyData = ["School has the big gay.", "Gay!!", "School have the big gay!", "Did you know School is gay?", "Please understand " + username + ", School is the big gay.", "100% gay!"];
      reply = replyData[Math.floor(Math.random() * replyData.length)];
      return reply;
    } else if(msg.join(' ').replace('/[a-z]/i', '').split(' ').slice(-1)[0] == '?') {
      var replyData = ["Sure?", "Maybe.", "I might agree.", "Yes!", "No!", "I'm having a hard time trying to understand that question..", "I think.", "Maybe, yes?", "Maybe, no.."];
      reply = replyData[Math.floor(Math.random() * replyData.length)];
      return reply;
    } else if(msg.indexOf("what") >= 0 && msg.indexOf("name") >= 0) {
        var replyData = ["Hello! I'm the CBG Bot!", "CBG Bot", "It's CBG Bot!", "...I forgot", "Please understand " + username + ", I forgot my name.", "Ok, it's CBG bot."];
        reply = replyData[Math.floor(Math.random() * replyData.length)];
        return reply;
    } else {
        var replyData = ["What are you asking, " + username + "?", "Hmm, ok?", "I don't understand...", "Huh?", "Explain to me, " + username + ".", "I can't understand what you said, " + username + ".", "???", "What?"];
        reply = replyData[Math.floor(Math.random() * replyData.length)];
        return reply;
    }
    
}

// Reads users input, then tells the bot what to do.
function sendData(message, user)
{
    var helpData = '<table style="border: 1px solid black;">  <tr style="border: 1px solid black;">    <th style="border: 1px solid black;">Command</th>    <th style="border: 1px solid black;">Infomation</th>  </tr>  <tr style="border: 1px solid black;">    <td style="border: 1px solid black;">!help</td>    <td style="border: 1px solid black;">Brings up this help table.</td>  </tr>  <tr>    <td style="border: 1px solid black;">!hello</td>    <td style="border: 1px solid black;">Says `Hi` to you.</td>  </tr>  <tr style="border: 1px solid black;">    <td style="border: 1px solid black;">!say</td>    <td style="border: 1px solid black;">It repeats what you say.</td>  </tr>  <tr style="border: 1px solid black;">    <td style="border: 1px solid black;">!meme</td>    <td style="border: 1px solid black;">Gets you a random meme from Reddit.</td>  </tr>  <tr style="border: 1px solid black;">    <td style="border: 1px solid black;">!aaa</td>    <td style="border: 1px solid black;">Try to guess what happens.</td>  </tr>  <tr style="border: 1px solid black;">    <td style="border: 1px solid black;">!math</td>    <td style="border: 1px solid black;">Solves your math expression.</td>  </tr>  <tr style="border: 1px solid black;">    <td style="border: 1px solid black;">!8ball</td>    <td style="border: 1px solid black;">You give it a question, and it will give you the answer.</td>  </tr>  <tr style="border: 1px solid black;">    <td style="border: 1px solid black;">!rate</td>    <td style="border: 1px solid black;">Rates you on the dank scale.</td>  </tr>  <tr style="border: 1px solid black;">    <td style="border: 1px solid black;">!googl</td>    <td style="border: 1px solid black;">Gives you a random goo.gl link.</td>  </tr>  <tr style="border: 1px solid black;">    <td style="border: 1px solid black;">!birb</td>    <td style="border: 1px solid black;">Gets you a random bird from Reddit.</td>  </tr>  <tr style="border: 1px solid black;">    <td style="border: 1px solid black;">!tiny</td>    <td style="border: 1px solid black;">Makes your word tiny.</td>  </tr>   <td style="border: 1px solid black;">!chat</td>    <td style="border: 1px solid black;">Chat with an AI.</td>  </tr><td style="border: 1px solid black;">!softwaregore, !crappydesign</td>    <td style="border: 1px solid black;">Gives you a random image from that subreddit.</td>  </tr></table></table>';
    var commands = ['!milk', '!softwaregore', '!crappydesign', '!hello', '!help', '!chat', '!say', '!meme', '!aaa', '!math', '!fortnite', '!8ball', '!rate', '!googl', '!birb', '!tiny'];
    var msg = "<img src='bot.png'> <b><font color='#ff0000'>H</font><font color='#ff5000'>o</font><font color='#ff8000'>t</font><font color='#fff000'>B</font><font color='#fff800'>o</font><font color='#ffff00'>t:</font> </b>";
    var args = message.split(" ");

// Hi, you found the comment that wasn't here before.
// You have earned the sweet prize of what we humans call A I R.
// * You recieved the prize * 
// * Collecting the prize, you gained 20 XP! *
// Level UP! LVL 9001
// (it's over 9000)

    if (commands.indexOf(args[0]) == -1 && message.includes("!") && message.toString()[0] == "!" && message.toString()[1] != "!") {
        sendMessage(msg + "The command <b>" + args[0] + "</b> was not found.");
        return;
    }

    switch (args[0]) {
        case "!hello":
            sendMessage(msg + "Hi, " + user + "!");
            break;
        case "!help":
            sendMessage(msg + helpData);
            break;

        case "!say":
            if(!args[1]){
                sendMessage(msg + "Hey, you're missing some text!");
            } else {
            sendMessage(msg + args.join(" ").replace("!say", ""));
            }
            break;
        case "/cls":
            clearChat();
            break;


        case "!softwaregore":
            generateSoftwareGore();
            var currentSoft = Math.floor(Math.random() * memeImages.length);
            sendMessage(msg + "<img src=" + softImages[currentSoft] + " height='680' width='680'>");
            break;
            
        case "!milk":
            milk();
            break;
            
        case "!crappydesign":
            generateCrappyDesign();
            var currentCrap = Math.floor(Math.random() * crapImages.length);
            sendMessage(msg + "<img src=" + crapImages[currentCrap] + " height='680' width='680'>");
            break;

        case "!meme":
            generateMemes();
            var currentMeme = Math.floor(Math.random() * memeImages.length);
            sendMessage(msg + "<img src='" + memeImages[currentMeme] + "' height='680' width='680'>");
            break;

        case "!aaa":
            sendMessage(msg + "aaAAAAAaaaaAAAAAAaaaaaAAAAAaaaaAAaaAaaAAaaaAAaa");
            break;

        case "!math":
            var math = args.join(" ").replace("!math", "").replace(/[^\d.+*/-]/g, '');
            if(!args[1]){
                sendMessage(msg + "Hey, you're missing some numbers!");
            } else if(math == "+" || math == "-" || math == "*" || math == "/"){
                sendMessage(msg + "You think I can add letters?");
            } else {
                sendMessage(msg + eval(math));
            }
            break;

        case "!fortnite":
            sendMessage(msg + "is gay like your mom, dad, uncle, granny, sister, brother, great granny etc.");
            break;

        case "!8ball":
            var answers = ['It is certain.', 'It is decidedly so.', 'Without a doubt.', 'Yes, definitely.', 'You may rely on it.', 'As I see it, yes', 'Most likely', 'Outlook good.', 'Yes!', 'Signs point to yes', 'Reply hazy try again.', 'Ask again later.', 'Better not tell you now.', 'Cannot predict now.', 'Concentrate and ask again.', 'Don\'t count on it.', 'My reply is no', 'My sources say no.', 'Outlook not so good.'];
            var random = Math.floor(Math.random() * answers.length);
            sendMessage(msg + answers[random].toString());
            break; 

        case "!rate":
            
            // Oh, so that's the purpose of ${}, gotcha.
            
            sendMessage(msg + "I rate you a " + Math.floor(Math.random() * 100 + 1) + "/100 on the dank scale.");
            break;

        case "!googl":
            var text = "";
            var possible = "GQUNnbqsx7269";

            for (var i = 0; i < 5; i++){
                text += possible.charAt(Math.floor(Math.random() * possible.length));
            }
            text = "<a href='https://goo.gl/" + text + "' target='_blank'>Here is your link.</a>";
            sendMessage(msg + text);
            break;
            

        case "!birb":
            var currentBirb = Math.floor(Math.random() * birbImages.length);
            sendMessage(msg + "<img src=" + birbImages[currentBirb] + " height='680' width='680'>");
            break;

        case "!chat":
            var message = args.join(" ").replace("!chat", "");
            sendMessage(msg + sendAI(message, user));
            break;

// Disabled.
/*
        case "!tiny":
            if (!args[1]) {
                sendMessage(msg + "Hey man, you're missing some text!");
                return;
            }
        
            var mappings = (function (object) {
                output = [];
                for (key in object) {
                    output.push({
                        regex: new RegExp(key, 'ig'),
                        replacement: object[key]
                    });
                }
                return output;
            
            })({
            
                a: '\u1D00',
            
                b: '\u0299',
            
                c: '\u1D04',
            
                d: '\u1D05',
            
                e: '\u1D07',
            
                f: '\uA730',
            
                g: '\u0262',
            
                h: '\u029C',
            
                i: '\u026A',
            
                j: '\u1D0A',
            
                k: '\u1D0B',
            
                l: '\u029F',
            
                m: '\u1D0D',
            
                n: '\u0274',
            
                o: '\u1D0F',
            
                p: '\u1D18',
            
                q: '\u0071',
            
                r: '\u0280',
            
                s: '\uA731',
            
                t: '\u1D1B',
            
                u: '\u1D1C',
            
                v: '\u1D20',
            
                w: '\u1D21',
            
                x: '\u0078',
            
                y: '\u028F',
            
                z: '\u1D22'
            
            });
                let output = args.join(' ').replace("!tiny", "");
                mappings.forEach(replacer => output = output.replace(replacer.regex, replacer.replacement));
                sendMessage(msg + output);
            break;   
*/            
        default:
            break;
    }
}