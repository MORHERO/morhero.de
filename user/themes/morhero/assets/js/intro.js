(function () {
	// Initial start function
	function setup_canvas(c) {
		resize_canvas(c);
		start_eventListener(c);
	}
	function start_eventListener(c) {
		// Exit the Intro Screen
		closeBtn.addEventListener('click', function() {
			var intro_window = document.getElementById('intro-window');

			// Hide Intro Screen
			document.getElementsByTagName('body')[0].setAttribute('intro', '0');
			// Reset window scroll Position
			document.getElementsByTagName('html')[0].scrollTop = 0;
		});
		// Recieve the clicks on the canvas
		intro_canvas.addEventListener('click', function(x) {
			canvas_click(x['clientX'], x['clientY']);
		});
		// Update Canvas size on window resize
		window.addEventListener('resize', function(){
			resize_canvas(c)
		});
		// On DOM Loaded start animate
		document.addEventListener("DOMContentLoaded", function () {
			animate();
		});
	}
	function resize_canvas(c) {
		var d_w = c.clientWidth;
		var d_h = c.clientHeight;
		c.setAttribute('width' , d_w);
		c.setAttribute('height', d_h);
	}

	function canvas_click(posX, posY) {
		console.log('x: ' + posX);
		console.log('y: ' + posY);

	}
	function animate() {
		requestAnimationFrame(animate);
		x += speed;
		if (x <= 0 || x >= 475) {
			speed = -speed;
			// y = y + 10; so könnte das Objekt am Ende einer Zeile eine Zeile nach unten gehen
		}
		draw();
	}

	function draw() {
		var canvas = document.getElementById('intro-canvas');
		var context = canvas.getContext('2d');
		context.clearRect(0, 0, 500, 300);
		context.fillStyle = '#dfac20';
		context.fillRect(x, y, 20, 20);
		context.lineWidth = 3;
		context.strokeStyle = '#3983ab';
		context.strokeRect(x, y, 20, 20);
	}
	

	// HTML element variables
	var closeBtn = document.getElementById('close-intro');
	var intro_canvas = document.getElementById('intro-canvas');

	var x = 0;
	var y = 15;
	var speed = 3;

	setup_canvas(intro_canvas);

}());