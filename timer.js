var time = 10000;

var x = setInterval(function() {
	// Display the result in the element with id="demo"
	document.getElementById("timer").innerHTML = "Time left: " + time/1000 + " seconds";
  
	// If the count down is finished, write some text 
	if (time <= 0) {
	  clearInterval(x);
		document.getElementById("timer").innerHTML = "EXPIRED";
		window.location = "timeout.php"
	}
	time -= 1000;
  }, 1000);