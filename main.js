
const about = document.getElementById("about");

about.onclick = function() {

    
    window.scrollTo(0, 800);

}

const navItems = document.getElementsByTagName("li");

const path = window.location.pathname;

if (path == "/Beauno%20Resort/index.php") {

    navItems[0].style.color = "green";
    
}else if (path == "/Beauno%20Resort/about.php") {

    navItems[2].style.color = "green";
    
}else {

    navItems[1].style.color = "green";
    
};

