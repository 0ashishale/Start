
 var navLinks=document.getElementById("navLinks");
 function showMenu(){
   navLinks.style.right ="0";
 } 

 function hideMenu(){
   navLinks.style.right= "-200px";
 }
 window.onscroll = function() {scrollFunction()};

 function scrollFunction() {
   if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
     document.getElementById("navLinks").style.fontSize = "10px";
   } else {
     document.getElementById("navLinks").style.fontSize = "40px";
   }


 }

