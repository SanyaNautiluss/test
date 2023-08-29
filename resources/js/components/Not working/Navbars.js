


subtopnav_intoview();
(
function setThemeCheckboxes() {
  var x = localStorage.getItem("preferredmode");
  var y = localStorage.getItem("preferredpagemode");  
  if (x == "dark") {
    document.getElementById("radio_darkcode").checked = true;
    
  }
  if (y == "dark") {
    document.getElementById("radio_darkpage").checked = true;
  }
})();

function mouseoverdarkicon() {
  if(window.matchMedia("(pointer: coarse)").matches) {
    //return false;
  }
  var a = document.getElementById("darkmodemenu");
  //a.style.top = "32px";
  a.style.top = "88px";  
}
function mouseoutofdarkicon() {
  var a = document.getElementById("darkmodemenu");
  //a.style.top = "-36px";
  a.style.top = "22px";  
}
function changepagetheme(n) {
  var a = document.getElementById("radio_darkcode");
  var b = document.getElementById("radio_darkpage");
  document.body.className = document.body.className.replace("darktheme", "");
  document.body.className = document.body.className.replace("darkpagetheme", "");    
  document.body.className = document.body.className.replace("  ", " ");
  if (a.checked && b.checked) {
    localStorage.setItem("preferredmode", "light");
    localStorage.setItem("preferredpagemode", "light");
    a.checked = false;
    b.checked = false;    
  } else {
    document.body.className += " darktheme";
    document.body.className += " darkpagetheme";  
    localStorage.setItem("preferredmode", "dark");
    localStorage.setItem("preferredpagemode", "dark");
    a.checked = true;
    b.checked = true;    
  }
}


function click_darkpage() {
  var b = document.getElementById("radio_darkpage");
  if (b.checked) {
    document.body.className += " darkpagetheme";
    document.body.className = document.body.className.replace("  ", " ");    
    localStorage.setItem("preferredpagemode", "dark");
  } else {
    document.body.className = document.body.className.replace("darkpagetheme", "");
    document.body.className = document.body.className.replace("  ", " ");    
    localStorage.setItem("preferredpagemode", "light");
  }
}

function click_darkcode() {
  var a = document.getElementById("radio_darkcode");
  if (a.checked) {
    document.body.className += " darktheme";
    document.body.className = document.body.className.replace("  ", " ");    
    localStorage.setItem("preferredmode", "dark");
  } else {
    document.body.className = document.body.className.replace("darktheme", "");
    document.body.className = document.body.className.replace("  ", " ");
    localStorage.setItem("preferredmode", "light");
  }
}
