var header_elem = document.getElementById("header");
var navigation_elem = document.getElementById("navigation");
var content_elem = document.getElementById("content");
var footer_elem = document.getElementById("footer");

var nav_trigger_y = header_elem.offsetHeight;

console.log(nav_trigger_y);
// window scroll triggers
window.onscroll = function(e){
    var scroll_top = (window.pageYOffset || document.scrollTop)  - (document.clientTop || 0);

    // Navigation trigger
    if(scroll_top >= nav_trigger_y){navigation_elem.classList.add("sticky");
        navigation_elem.classList.add("sticky");
        
    }else if(scroll_top < nav_trigger_y){
        navigation_elem.classList.remove("sticky");
    }

}



