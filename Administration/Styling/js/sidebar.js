const Sidebar = document.querySelector('.sidebar');
const hamburger = document.querySelector('.hamburger');

window.onload = function () {
  barshowload();
};

function barshowload() {

  var sidebarstatus = localStorage.getItem("sidebar");

  if (sidebarstatus === "hidden") {
    Sidebar.style.display = "block";
  } 
  else if (sidebarstatus === "shown") {
      Sidebar.style.display = "none";
  }
  else {
    localStorage.setItem("sidebar", "hidden");
    Sidebar.style.display = "block";
  }
};



hamburger.onclick = function () {
  barshow();
};

function barshow() {

  var sidebarstatus = localStorage.getItem("sidebar");

    if (sidebarstatus === "shown") {
      Sidebar.style.display = "block";
      localStorage.setItem("sidebar", "hidden");
    } 
    else if (sidebarstatus === "hidden") {
        Sidebar.style.display = "none";
        localStorage.setItem("sidebar", "shown");
    }
  };


  