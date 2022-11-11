// Set the date we're counting down to
var countDownDate = new Date("Aug 26, 2024 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function () {
	// Get today's date and time
	var now = new Date().getTime();

	// Find the distance between now and the count down date
	var distance = countDownDate - now;

	// Time calculations for days, hours, minutes and seconds
	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	// Output the result in an element with id="demo"
	document.getElementById("demo").innerHTML = days + "hari       " + hours + "jam       " + minutes + "menit       " + seconds + "detik       ";

	// If the count down is over, write some text
	if (distance < 0) {
		clearInterval(x);
		document.getElementById("demo").innerHTML = "EXPIRED";
	}
}, 1000);

const myAudio = document.getElementById("audio");
const btn = document.getElementById("btn-playback");
const btnIcon = document.querySelector("#btn-playback > i");
const btnText = document.getElementById("btn-text");

const toggleMusic = () => {
	const dataPlay = btn.getAttribute("data-play");

	if (dataPlay === "false") {
		btn.setAttribute("data-play", "false");
		myAudio.pause();
		btnIcon.classList.remove("fa-pause");
		btnIcon.classList.add("fa-play");
		btnText.innerText = "PLAY";
	} else {
		btn.setAttribute("data-play", "true");
		myAudio.play();
		btnIcon.classList.remove("fa-play");
		btnIcon.classList.add("fa-pause");
		btnText.innerText = "PAUSE";
	}
};

myAudio.onpause = () => {
	btn.setAttribute("data-play", "false");
	myAudio.pause();
	btnIcon.classList.remove("fa-pause");
	btnIcon.classList.add("fa-play");
	btnText.innerText = "PLAY";
};
