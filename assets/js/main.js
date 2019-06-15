var header_elem = document.getElementById("header");
var headerTitle_elem = document.getElementById("headerTitle")
var navigation_elem = document.getElementById("navigation");
var intro_elem = document.getElementById("intro");
var showcase_elem = document.getElementById("showcase");
var challenge_elem = document.getElementById("challenge")
var contact_elem = document.getElementById("contact");
var content_elem = document.getElementById("content");
var footer_elem = document.getElementById("footer");
var info_elem = document.getElementById("info-dock");

var nav_points = [
        document.getElementById('nav_home'),
        document.getElementById('nav_intro'),
        document.getElementById('nav_challenge'),
        document.getElementById('nav_showcase'),
        document.getElementById('nav_contact')
    ];

var nav_trigger_y = header_elem.offsetHeight;


// Anchor links & onclick trigger
const anchor_links = document.querySelectorAll('.scroll');
anchor_links.forEach(each => (each.onclick = scrollAnchors));

// copy texts & onclick trigger
const copy_texts = document.querySelectorAll('.click-copy');
copy_texts.forEach(each => (each.onclick = copyToClipboard));

if(info_elem != undefined) {
    info_elem.onclick = function(e) {
        console.log(e.path[0]);
        if(e.path[0].classList.contains("out")) {
            this.classList.toggle("open");
            var tgl_text = this.querySelectorAll(".info-tgl")[0];
            if(tgl_text.innerHTML == "B") {
                tgl_text.innerHTML = "X";
            }else {
                tgl_text.innerHTML = "B";
            }
        }
    }
}

// showcase navigation & onclick trigger
const showcase_nav = document.querySelectorAll('.project-nav .element');
showcase_nav.forEach(each => (each.onclick = scrollShowcase));

// window scroll triggers
window.onscroll = function(e){
    var scroll_top = (window.pageYOffset || document.scrollTop)  - (document.clientTop || 0);

    // Navigation trigger
    if(scroll_top >= nav_trigger_y){
        navigation_elem.classList.add("sticky");
    }else if(scroll_top < nav_trigger_y){
        headerParallax(scroll_top);
        navigation_elem.classList.remove("sticky");
    }

    if(intro_elem != undefined) {
        // Navigation active element
        if(scroll_top < intro_elem.offsetTop && !nav_points[0].classList.contains('active')) {
            setActiveNavigationPoint(nav_points[0]);
        }else if (scroll_top >= intro_elem.offsetTop && scroll_top < challenge_elem.offsetTop && !nav_points[1].classList.contains('active')) {
            setActiveNavigationPoint(nav_points[1]);
        }else if (scroll_top >= challenge_elem.offsetTop && scroll_top < showcase_elem.offsetTop && !nav_points[2].classList.contains('active')) {
            setActiveNavigationPoint(nav_points[2]);
        }else if (scroll_top >= showcase_elem.offsetTop && scroll_top < contact_elem.offsetTop && !nav_points[3].classList.contains('active')) {
            setActiveNavigationPoint(nav_points[3]);
        }else if (scroll_top >= contact_elem.offsetTop && !nav_points[4].classList.contains('active')) {
            setActiveNavigationPoint(nav_points[4]);
        }
    }
}

function headerParallax(scrollPos) {
    headerTitle_elem.style.margin = (scrollPos)+"px 0px 0px 0px";
    headerTitle_elem.style.opacity = 1-(scrollPos/750);
}

function scrollAnchors(e, respond = null) {
    const distanceToTop = el => Math.floor(el.getBoundingClientRect().top);
    const placeholderSize = 100;

    e.preventDefault();
    var targetID = (respond) ? respond.getAttribute('href') : this.getAttribute('href');
    const targetAnchor = document.querySelector(targetID);
    if (!targetAnchor) return;
    const originalTop = distanceToTop(targetAnchor);
    window.scrollBy({ top: originalTop - placeholderSize, left: 0, behavior: 'smooth' });
    const checkIfDone = setInterval(function() {
        const atBottom = window.innerHeight + window.pageYOffset - placeholderSize >= document.body.offsetHeight - 2;
        if (distanceToTop(targetAnchor) === 0 || atBottom) {
            targetAnchor.tabIndex = '-1';
            targetAnchor.focus();
            window.history.pushState('', '', targetID);
            clearInterval(checkIfDone);
        }
    }, 100);
}

function copyToClipboard(e, respond = null) {
    var text = e.path[0].innerText;
    var elem = document.createElement("textarea");
    document.body.appendChild(elem);
    elem.value = text;
    elem.select();
    document.execCommand("copy");
    document.body.removeChild(elem);
}

function scrollShowcase(e, respond = null) {
    const pos_id = e.path[0].getAttribute('data-pos');
    const childs = document.querySelectorAll('.show-list .showcase');
    const parent = document.querySelectorAll('.show-list')[0];
;
    var pos_left = childs[pos_id].getBoundingClientRect().left - parent.getBoundingClientRect().left;
    parent.scrollBy({ top: 0, left: pos_left, behavior: 'smooth' });
    const checkIfDone = setInterval(function() {
        currentTop = childs[pos_id].getBoundingClientRect().left;
        if (Math.floor(currentTop) === 0 ) {
            childs[pos_id].tabIndex = "-1";
            childs[pos_id].focus();
            clearInterval(checkIfDone);
        }
    }, 100);
    document.querySelectorAll('.project-nav .element').forEach(each => (each.classList.remove('active')));
    e.path[0].classList.add('active');
}

function setActiveNavigationPoint(ae) {
    console.log(ae);
    nav_points.forEach(each => (each.classList.remove('active')));
    ae.classList.add('active');
}