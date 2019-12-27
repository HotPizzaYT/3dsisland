function sendMessage(m){

var xhr = new XMLHttpRequest();
xhr.open("POST", "https://chromebookgang.000webhostapp.com/chat/api.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
xhr.send("f=sendMessage&m=" + encodeURIComponent(m) + "");
}

function milk(){

var xhr = new XMLHttpRequest();
xhr.open("POST", "https://chromebookgang.000webhostapp.com/chat/api.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
xhr.send("f=mc");
}
