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

// const activePage = window.location.pathname;
// const mg =document.querySelectorAll('nav a').
// forEach(link=>{
//     console.log(link.href);
//     if(link.href.includes('${activePage}')){
//         console.log('${activePage}');
//     }
// })
// console.log(activePage);
$(function() {
    // this will get the full URL at the address bar
    var url = window.location.href;

    // passes on every "a" tag
    $(".nav-bar a").each(function() {
        // checks if its the same on the address bar
        if (url == (this.href)) {
            $(this).closest("li").addClass("active");
            //for making parent of submenu active
           $(this).closest("li").parent().parent().addClass("active");
        }
    });
}); 

