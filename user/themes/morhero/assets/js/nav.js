var nav_trigger = document.getElementById('nav-trigger');
var nav_element = document.getElementById('nav');
var nav_active = false;

nav_trigger.addEventListener('click', function(){
	
	// Determine if Animation is displayed or not
	if(!nav_active) {
		// Get a random display animation
		var anim = get_in_animation();
		nav_active = true; // Change animation state
	}else {
		// Get a random hide animation
		var anim = get_out_animation();
		nav_active = false; // Change animation state
	}
	// Set Animation on Navigation 
	nav.style.animation = anim;
})

// RETURN STRING
// Returns a random picked animation to display the navigation
function get_in_animation() {
	// Animation List - Animation must be set in _nav.scss
	var animationList = [
		"1s ease 0s 1 normal forwards running slide_down",
		"1s ease 0s 1 normal forwards running slide_to_right",
		"1s ease 0s 1 normal forwards running slide_to_left"
		];

	// Animation ID which animation will be returned
	var animID = getRandomInt(0, animationList.length);

	return animationList[animID];
}

// RETURN STRING
// Returns a random picked animation to hide the navigation
function get_out_animation() {	
	// Animation List - Animation must be set in _nav.scss
	var animationList = [
		"1s ease 0s 1 normal forwards running slide_up_go",
		"1s ease 0s 1 normal forwards running slide_to_right_go",
		"1s ease 0s 1 normal forwards running slide_to_left_go"
		];

	// Animation ID which animation will be returned
	var animID = getRandomInt(0, animationList.length);

	return animationList[animID];
}
