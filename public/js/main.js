
function hideMenu(){
    var size = decument.getElementById('small-nav');

    if (size.className === "nav-bar"){
        size.className =+ "responsive";
    } else {
        size.className = "nav-bar";
    }
}
