// ta02.js
function soccerNews() {
	window.location='http://www.soccernews.com/';
}

function changeColor() {
	var textbox_id = "pageColor";
	var textbox = document.getElementById(textbox_id);

	var div_id = "divmain";
	var div = document.getElementById(div_id);

	// We should verify values here before we use them...
	var color = textbox.value;
	div.style.backgroundColor = color;

}
