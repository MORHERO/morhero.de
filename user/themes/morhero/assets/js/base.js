// RETURN INT
// Generates a random Int and returns it
// Default will return 0 or 1
function getRandomInt(min = 0, max = 1) {
	min = Math.ceil(min);
	max = Math.floor(max);

	return Math.floor(Math.random() * (max - min)) + min;
}

/*var prePosY = 0
document.addEventListener('scroll', function(e) {
	var posY = e.pageY;
	if(prePosY != 0){
		console.log("pre pos: " + prePosY);
		console.log("now pos: " + posY);
		console.log("diff:    " + (prePosY - posY));
		if((posY - prePosY) > 80){
			prePosY = posY;
			alert("fast");
		}
	}
	prePosY = posY;
	console.log("###");
})*/