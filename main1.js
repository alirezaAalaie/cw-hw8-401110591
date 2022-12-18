function f(){
    var txt;
  if (confirm("Are you sure about the information?")) {
    txt = "Your message has been sent";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}