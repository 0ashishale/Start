// -------navbar js----------
var navLinks = document.getElementById("navLinks");
function showMenu() {
    navLinks.style.right = "0";
}

function hideMenu() {
    navLinks.style.right = "-200px";
}
window.onscroll = function () {
    scrollFunction();
};
// ----------change navbar size--------------
function scrollFunction() {
    if (
        document.body.scrollTop > 50 ||
        document.documentElement.scrollTop > 50
    ) {
        document.getElementById("navLinks").style.fontSize = "0";
    } else {
        document.getElementById("navLinks").style.fontSize = "50px";
    }
}

// ------------active page---------

const activePage = window.location.pathname;
const mg =document.querySelectorAll('nav a').
forEach(link=>{
    console.log(link.href);
    if(link.href.includes('${activePage}')){
        console.log('${activePage}');
    }
})



