/*
 * site JS
 */

// Buttons

// set outline buttons to change colour on hover and revert after hover
var outlineButtons = document.getElementsByClassName("wp-block-button is-style-outline");

// set text colour to white and background to text colour on hover
var outlineButtonHover = function() {
	var btnColor = getComputedStyle(this).color;
	this.style.setProperty("background-color", btnColor, "important")
	this.style.setProperty("color", "white", "important");
};

// revert hover colour to how they were before
var outlineButtonHoverOver = function() {
	var btnColor = getComputedStyle(this).backgroundColor;
	this.style.setProperty("background-color", "transparent", "important");
	this.style.setProperty("color", btnColor, "important");
};

for (var i = 0; i < outlineButtons.length; i++) {
	console.log(outlineButtons[i]);
	outlineButtons[i].getElementsByTagName("a")[0].addEventListener('mouseover', outlineButtonHover, false);
	outlineButtons[i].getElementsByTagName("a")[0].addEventListener('mouseout', outlineButtonHoverOver, false);

	// if outline button has background, set background to transparent
	outlineButtons[i].getElementsByTagName("a")[0].style.setProperty("background-color", "transparent", "important");
}
