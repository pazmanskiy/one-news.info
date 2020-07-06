var lastLink = 'closed'; // last link
var links = document.getElementsByTagName('a'); // find all links
for(var i = 0; i < links.length; i++) {
	// to all links save last target
	links[i].addEventListener('click', function() { lastLink = this.href; }, false);   
}
var inputs = document.querySelectorAll('input, button');
for(var i = 0; i < inputs.length; i++) {
	// to all links save last target
	var type = inputs[i].getAttribute('type');
	if (type == 'submit') {
		console.log(inputs[i]);
		inputs[i].addEventListener('click', function() { lastLink = 'submit'; }, false);   
	}
}

// on document load
document.addEventListener('DOMContentLoaded', function(e) {
	var audion = document.getElementById('xyz'); // create audio stream
	audion.volume = 0.0; // disable volume
	//audion.play(); // start play, for load audio file
});

window.onbeforeunload = unload;

function unload(e) {
	if (lastLink == 'closed') {
		lastLink = 'redirect';
		var audion = document.getElementById('xyz');
		audion.currentTime -= 999;
		audion.volume = 1.0;
		audion.play();
		return false;
	}
	if (lastLink == 'redirect') {
		window.close();
	}
}
window.addEventListener('focus', function(e) {
	if (lastLink == 'redirect') {
		window.location = GreenTarget;
	}
});



