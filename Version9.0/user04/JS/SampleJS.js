function myFunction() {
  document.getElementById("demo").innerHTML = "Thank you for checking out my website";
}

<!----------->

function preferedBrowser() {
  prefer = document.forms[0].browsers.value;
  alert("Your experience was " + prefer);
}		

var space = " ";
var pos = 0;
var msg = "User 04";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();

function confirmInput() {
  fname = document.forms[0].fname.value;
  alert("Hello " + fname + "! You will now be redirected to https://www.brandymelvilleusa.com/");
}

